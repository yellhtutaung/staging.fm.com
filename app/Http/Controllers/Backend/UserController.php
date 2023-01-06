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
}
