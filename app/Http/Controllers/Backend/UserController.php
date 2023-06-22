<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::where('status',1)->orderBy('id','DESC')->get();
//        $currentCountry = Country::where('status', 1)->where('level', 1)->where('id', $fetchUser->country_id)->first();
//        $currentCity = Country::where('status', 1)->where('level', 2)->where('id', $fetchUser->city_id)->first();
        return view('backend.user.list',compact('users'));
    }

    public function editUser($id)
    {
        $fetchUser = User::find($id);
        return view('backend.user.edit',compact('fetchUser'));
    }


    public function checkUsername($userId,$username)
    {
        $findingUser = User::where('id',$userId)->where('username',$username)->first();
        if ($findingUser){
            return 1;
        }else{
            $findingUser = User::where('username',$username)->first();
            if ($findingUser){
                return 0;
            }else{
                return 1;
            }
        }
    }

    public function updateUser(Request $In)
    {
        try{
            $fetchUser = User::find($In->userId);
            $checkUsername = $this->checkUsername($fetchUser->id,$In->username);
            if ($checkUsername == 0)
            {
                return redirect()->back()->with('warning', 'You cannot change ! Username already exit');
            }else{
                $fetchUser->username = $In->username;
                if ($fetchUser->save())
                {
                    return redirect()->back()->with('success', 'Username successfully updated !');
                }
            }

        }catch (\Exception $e) {
            return redirect()->back()->with('warning', $e->getMessage());
        }
    }

    public function userDetails($token)
    {
        try{
            $fetchUser = User::where('token',$token)->first();
            $currentCountry = Country::where('status', 1)->where('level', 1)->where('id', $fetchUser->country_id)->first();
            $currentCity = Country::where('status', 1)->where('level', 2)->where('id', $fetchUser->city_id)->first();
            if ($fetchUser)
            {
                return view('backend.user.details',compact('fetchUser','currentCity','currentCountry'));
            }else{
                return redirect()->back()->with('warning', 'User not found ');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('warning', $e->getMessage());
        }
    }

    public function banUser(Request $In)
    {
        return $fetchUser = User::find($In->userId);
    }


}
