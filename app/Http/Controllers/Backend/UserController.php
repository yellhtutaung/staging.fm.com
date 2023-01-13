<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::where('status',1)->where('is_ban',1)->orderBy('id','DESC')->get();
        return view('backend.user.list',compact('users'));
    }

    public function editUser($id)
    {
        $fetchUser = User::find($id);
        return view('backend.user.edit',compact('fetchUser'));
    }

    public function updateUser(Request $In)
    {
        try{
            $fetchUser = User::find($In->userId);
            $fetchUser->username = $In->username;
            if ($fetchUser->save())
            {
                return redirect()->back()->with('success', 'Username successfully updated !');;
            }
        }catch (\Exception $e) {
            return back()->with('warning', $e->getMessage());
        }
    }

}
