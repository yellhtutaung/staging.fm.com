<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('web')->user();
        $currentCountry = Country::where('status', 1)->where('level', 1)->where('id', $user->country_id)->first();
        $currentCity = Country::where('status', 1)->where('level', 2)->where('id', $user->city_id)->first();
//        return view('frontend.pages.old_pages.old_profile' , compact('user', 'currentCountry', 'currentCity'));
        return view('frontend.pages.profile' , compact('user', 'currentCountry', 'currentCity'));
    }

    public function editProfile ()
    {
        $user = Auth::guard('web')->user();
        $currentCities = Country::where('status', 1)->where('level', 2)->where('parent_id', $user->country_id)->get();
        $countries = Country::where('status',1)->where('level', 1)->get();
        $cities = Country::where('status', 1)->where('level', 2)->get();

        return view('frontend.pages.edit-profile', compact('user', 'countries', 'cities', 'currentCities'));
    }

    public function updateProfile (Request $request) {

        $user = Auth::guard('web')->user();

        $formData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
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
        $user = Auth::guard('web')->user();
        return view('frontend.pages.change-password',compact('user'));
    }

    public function updatePassword (Request $request)
    {
        if($request->forgot_bot){
            $formData = $request->validate([
                'password' => ['required', 'min:6', 'max:20' , 'confirmed'],
                'forgot_bot' => ['required']
            ]);
            $user = Auth::guard('web')->user();
            $user->password = Hash::make($request->password);
            $user->update();
            return redirect()->route('profile')->with('update', 'Password Updated Successfully.');
        }else{
            $formData = $request->validate([
                'old_password' => ['required', 'min:6', 'max:20'],
                'password' => ['required', 'min:6', 'max:20' , 'confirmed'],
            ]);

            $user = Auth::guard('web')->user();

            if (Hash::check($request->old_password, $user->password)) {
                if (Hash::check($request->password, $user->password)){
                    if (Session::get('locale') == 'mm'){
                        return back()->withErrors(['password'=>'သင့်စကားဝှက်အသစ်သည် စကားဝှက်ဟောင်းနှင့် အတူတူမဖြစ်သင့်ပါ။']);
                    }
                    return  back()->withErrors(['password' => 'Your new password should not be same old password.']);
                }
                $user->password = Hash::make($request->password);
                $user->update();
                return redirect()->route('profile')->with('update', 'Password Updated Successfully.');
            }else {
                if (Session::get('locale') == 'mm'){
                    return back()->withErrors(['old_password'=>'သင့်စကားဝှက် မှားယွင်းနေပါသည်။']);
                }
                return  back()->withErrors(['old_password' => 'Your password is incorrect.']);
            }
        }

    }

    public function userSamplePage()
    {
        $user = Auth::guard('web')->user();
        return view('frontend.pages.sample',compact('user'));
    }

}
