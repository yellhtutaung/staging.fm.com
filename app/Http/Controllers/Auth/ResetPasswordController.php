<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\OtpVerify;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Faker\Provider\PhoneNumber;
use App\Http\Controllers\Helpers\General;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use function Sodium\compare;

//use Propaganistas\LaravelPhone\PhoneNumber;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use General;
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                return redirect()->back();
            }
            return $next($request);
        });
    } // if u have auth go to back | else go to next
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function customForgotPassword(Request $In)
    {
        try {
            $validator=Validator::make(
                $In->all(),
                [
                    'phone' => ['required','min:8','max:14'],
                ],
            );
            if ($validator->fails()) {
                $message = $validator->errors();
                return  redirect()->back()->withErrors($message)->withInput();
            } else {
//                $phone = PhoneNumber::make($In->phone, 'MM')->formatE164(); // format phone number to international format
                $fetchUser = User::where('phone', $In->phone)->first();
                if ($fetchUser)
                {
                    if ($fetchUser->is_ban)
                    {
                        if (Session::get('locale', 'mm')){
                            return redirect()->back()->withErrors(['phone'=>'အသုံးပြုခွင့်ပိတ်ပင်ထားပါသည် ကျေးဇူးပြု၍ FreshMoe ရုံးချုပ်သို့ ဆက်သွယ်ပေးပါ']);
                        }
                        return redirect()->back()->withErrors(['phone'=>'You are banded form admin | Plz contact to FreshMoe Head office']);
                    }
                    $generateOtp = $this->generateOTP($In->phone);
                    if($generateOtp)
                    {
                        if($this->sendSMS($In->phone,$generateOtp,' is you are forget password OTP number .'))
                        {
                            $phone = $In->phone;
                            return redirect()->route('checkOtp')->with('phone',$phone );
                        }
                    }else{
                        if (Session::get('locale', 'mm')){
                            return redirect()->back()->withErrors(['phone'=>'Otp ကုဒ်ဖန်တီးခြင်းပြသနာ']);
                        }
                        return redirect()->back()->withErrors(['phone'=>'Otp code creating error ...']);
                    }
                } else {
                    if (Session::get('locale', 'mm')){
                        return redirect()->back()->withErrors(['phone'=>'အကောင့်ဖန်းတီးထားခြင်းမရှိပါ။'])->withInput();
                    }
                    return redirect()->back()->withErrors(['phone'=>'There is no user with this phone number...'])->withInput();
                }
            }
        }catch (\Exception $errorMessage) {
            return  redirect()->back()->withErrors($errorMessage);
        }

    }


    public function generateOTP($incomingPhone)
    {
        $generateOtp = mt_rand(100000,999999);
        $otpDb = new OtpVerify();
        $otpDb->phone = $incomingPhone;
        $otpDb->otp = $generateOtp;
        $otpDb->is_verify = 0;
        if ($otpDb->save())
        {
            return $generateOtp;
        }else{
            return false;
        }
    }


    public function checkOtp()
    {
        return view('auth.passwords.otp_check');
    }


    public function checkForgetOtp(Request $In)
    {
        try {
            if (!$In->phone)
            {
                return redirect()->route('password.request');
            }
            $validator = Validator::make(
                $In->all(),
                [
                    'phone' => ['required','min:8','max:14'],
                    'otp' => ['required','min:6','max:6']
                ],
            );
            if ($validator->fails()) {
                $message = $validator->errors();
                return  redirect()->back()->withErrors($message)->with('phone',$In->phone);
            } else {
                $user=User::where('phone', $In->phone)->first();
                if (!$user) {
                    return redirect()->back()->withErrors(['phone'=>'There is no user with this phone number...']);
                }
                $otpVerify=OtpVerify::where('phone', $In->phone)->orderBy('id','DESC')->first();
                if ( $otpVerify->otp == $In->otp) {
                    $user->password = Hash::make($In->password);
                    if ($user->save())
                    {
                        $delOtp = OtpVerify::where('phone',$In->phone)->delete();
                        $formData = $In->validate([
                            'phone' => ['required', Rule::exists('users', 'phone')],
                            'password' => ['required']
                        ]);
                        Auth::attempt($formData);
                        return redirect()->route('change-password')->with('forgot_bot',1);
                    }
                } else {
                    if (Session::get('locale', 'mm')){
                        return  redirect()->back()->withErrors(['otp'=>'OTP မှားယွင်းနေပါသည်‌'])->with('phone',$In->phone);
                    }
                    return  redirect()->back()->withErrors(['otp'=>'Your OTP is Wrong'])->with('phone',$In->phone);
                }
            }
        }catch (\Exception $errorMessage) {
            return  redirect()->back()->withErrors($errorMessage)->with('phone',$In->phone);
        }
    }

}
