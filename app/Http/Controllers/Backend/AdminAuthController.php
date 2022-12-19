<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminAuthController extends Controller
{
    public function login () {
        return view('login');
    }

    public function post_login (Request $request)
    {
        $formData = $request->validate([
            'email' => ['required', Rule::exists('users', 'email')],
            'password' => ['required']
        ]);
        if (Auth::attempt($formData)) {
            return redirect('admin');
        }else {
            return back();
        }
    }
}
