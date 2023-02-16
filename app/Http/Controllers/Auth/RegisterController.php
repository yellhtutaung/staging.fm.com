<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\General;
use App\Models\Country;
use App\Models\OtpVerify;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use stdClass;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use General;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $countries = Country::where('hide_show',1)->where('status',1)->where('level', 1)->get();
        $cities = Country::where('hide_show',1)->where('status', 1)->where('level', 2)->get();
        return view('auth.register', compact('countries', 'cities'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        $validator = Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
//            'phone' => ['required', 'unique:users'],
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//        ]);
//
//        return $validator;
//    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
//    protected function create(array $data)
//    {
//        $user = new User();
//        $user->name = $data['name'];
//        $user->username = str_shuffle(md5(date("dhis")));
//        $user->email = $data['email'];
//        $user->phone = $data['phone'];
//        $user->shop_name = $data['shop_name'];
//        $user->country_id = $data['country_id'];
//        $user->city_id = isset($data['city_id']) ? $data['city_id'] : null;
//        $user->zip_code = $data['zip_code'];
//        $user->postal_code = $data['postal_code'];
//        $user->address = $data['address'];
//        $user->password = Hash::make($data['password']);
//        $user->token = str_shuffle(md5(date("ymdhis")));
//
//        $user->save();
//        return $user;
//
//    }

    public function saveRegister(Request $In)
    {
        $userData = $this->registerObj($In);
        $validator = Validator::make(
            $In->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'unique:users' , 'min:10'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'otp' => ['required' , 'min:6'],
                'country_id' => ['required'],
                'city_id' => ['required']
            ],
        );
        if ($validator->fails()) {
            $message = $validator->errors();
            return  redirect()->route('registerOtpCheck')->with('In',$userData)->withErrors(['otp'=>$message]);
        } else {
            $otpVerify=OtpVerify::where('phone', $In->phone)->orderBy('id','DESC')->first();
            if ( $otpVerify->otp == $In->otp && $In->phone == $otpVerify->phone) {
                $user = new User();
                $user->name = $In['name'];
                $user->username = str_shuffle(md5(date("dhis")));
                $user->email = $In['email'];
                $user->phone = $In['phone'];
                $user->shop_name = $In['shop_name'];
                $user->country_id = $In['country_id'];
                $user->city_id = isset($In['city_id']) ? $In['city_id'] : null;
                $user->zip_code = $In['zip_code'];
                $user->postal_code = $In['postal_code'];
                $user->address = $In['address'];
                $user->password = Hash::make($In['password']);
                $user->token = str_shuffle(md5(date("ymdhis")));
                if ($user->save())
                {
                    $delOtp = OtpVerify::where('phone',$In->phone)->delete();
                    $formData = $In->validate([
                        'phone' => ['required', Rule::exists('users', 'phone')],
                        'password' => ['required']
                    ]);
                    Auth::attempt($formData);
                    return redirect()->route('priceList');
                }
            } else {
                if (Session::get('locale', 'mm')){
                    return  redirect()->route('registerOtpCheck')->with('In',$userData)->withErrors(['otp'=>'otp မှားယွင်းနေပါသည်။']);
                }
                return  redirect()->route('registerOtpCheck')->with('In',$userData)->withErrors(['otp'=>'Your OTP is Wrong']);
            }
        }
    }

    public function customRegister(Request $In)
    {
        $validator = Validator::make(
            $In->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'unique:users' , 'min:10', 'max:13'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'country_id' => ['required'],
                'city_id' => ['required']
            ]
        );
        if ($validator->fails()) {
            $message = $validator->errors();
            return  redirect()->back()->withErrors($message)->withInput();
        } else {
            $generateOtp = $this->generateOTP($In->phone);
            if($generateOtp)
            {
                if($this->sendSMS($In->phone,$generateOtp,' is your register OTP number .'))
                {
//                return redirect()->route('registerOtpCheck',compact('In'));
                    $userData = $this->registerObj($In);
                    return redirect()->route('registerOtpCheck')->with('In',$userData);
                }
            }else{
                return redirect()->back()->withErrors(['phone'=>'Otp code creating error ...']);
            }
        }
    }

    public function registerObj($In)
    {
        $object = new stdClass();
        $object->name = $In['name'];
        $object->email = $In['email'];
        $object->phone = $In['phone'];
        $object->shop_name = $In['shop_name'];
        $object->country_id = $In['country_id'];
        $object->city_id = isset($In['city_id']) ? $In['city_id'] : null;
        $object->zip_code = $In['zip_code'];
        $object->postal_code = $In['postal_code'];
        $object->address = $In['address'];
        $object->password = $In['password'];
        return $object;
    }

    public function registerOtpCheck()
    {
        return view('frontend.auth.register-otp');
    }

}
