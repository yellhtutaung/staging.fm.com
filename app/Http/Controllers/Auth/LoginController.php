<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function login (\Illuminate\Http\Request $request) {
        $formData = $request->validate([
            'credentials' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->credentials;
        $user = User::where('username', $credentials)->orWhere('email', $credentials)->orWhere('phone', $credentials)->first();
        if (!$user){
            if (Session::get('locale') == 'mm'){
                return back()->withErrors(['credentials'=>'သင့်ရဲ့အထောက်အထား မမှန်ကန်ပါ။'])->withInput();
            }
            return back()->withErrors(['credentials'=>'Your data is invalid.'])->withInput();
        }

        if(Hash::check($request->password, $user->password)){
            if($user->is_ban)
            {
                if (Session::get('locale') == 'mm'){
                    return back()->withErrors(['credentials'=>'အသုံးပြုခွင့်ပိတ်ပင်ထားပါသည် | ကျေးဇူးပြု၍ FreshMoe ရုံးချုပ်သို့ ဆက်သွယ်ပေးပါခင်ဗျ'])->withInput();
                }
                return back()->withErrors(['credentials'=>'You are banned user | Please connect to admin '])->withInput();
            }
            Auth::login($user);
            return redirect()->route('priceList');
        }else {
            if (Session::get('locale') == 'mm'){
                return back()->withErrors(['password'=>'သင့်ရဲ့စကားဝှက် မမှန်ကန်ပါ။'])->withInput();
            }
            return back()->withErrors(['password' => 'Your password is incorrect.'])->withInput();
        }
    }
}
