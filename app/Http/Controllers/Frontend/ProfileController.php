<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('web')->user();
        return view('frontend.pages.profile' , compact('user'));
    }

    public function editProfile ()
    {
        $user = Auth::guard('web')->user();
        return view('frontend.pages.edit-profile', compact('user'));
    }

    public function updateProfile (Request $request) {

        $user = Auth::guard('web')->user();

        $formData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'phone' => ['required', Rule::unique('users', 'phone')->ignore($user->id)],
            'shop_name' => ['nullable'],
            'country_id' => ['nullable'],
            'city_id' => ['nullable'],
            'postal_code' => ['nullable'],
            'zip_code' => ['nullable'],
            'address' => ['nullable'],
        ]);


        $user->update($formData);

        return redirect()->route('profile')->with('update', 'Profile Update Successfully.');

    }

    public function changePassword()
    {
        return view('frontend.pages.change-password');
    }

    public function updatePassword (Request $request)
    {
        $formData = $request->validate([
            'old_password' => ['required', 'min:6', 'max:20'],
            'password' => ['required', 'min:6', 'max:20' , 'confirmed'],
        ]);

        $user = Auth::guard('web')->user();

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->update();
            return redirect()->route('profile')->with('update', 'Password Updated Successfully.');
        }

        return  back()->withErrors(['old_password' => 'Your password is incorrect.']);
    }

}
