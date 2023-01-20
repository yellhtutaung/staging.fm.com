<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'key' => 'required',
            'password' => 'required',
        ], [
            'key.required' => 'Please enter your email or phone number or username.',
            'password.required' => 'Please enter your password.'
        ]);

        $key = $request->key;
        $user = User::where('username', $key)->orWhere('email', $key)->orWhere('phone', $key)->first();
        if (!$user){
            return back()->withErrors(['key'=>'Your data is invalid.'])->withInput();
        }

        if(Hash::check($request->password, $user->password)){
            Auth::login($user);
            return redirect()->route('priceList');
        }else {
            return back()->withErrors(['password' => 'Your password is incorrect.'])->withInput();
        }
    }
}
