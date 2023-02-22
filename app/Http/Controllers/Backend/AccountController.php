<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function accountList () {
        $admins = Admin::where('status',1)->where('role', '>', Auth::guard('admin')->user()->role)->orderBy('id','DESC')->get();
        return view('backend.account.list',compact('admins'));
    }

    public function addAccount () {
        $roles = config('app.roles');
        return view('backend.account.add', compact('roles'));
    }

    public function  createAccount (Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'role' => ['required'],
                'phone' => ['required', Rule::unique('users', 'phone')],
                'email' => ['nullable', Rule::unique('users', 'email')],
                'password' => ['nullable'],
            ]);

            if ( $validator->fails() ) {
                return redirect()->back()->with('warning',  $validator->errors()->first())->withInput();
            }

            $account = new Admin();
            $account->name= $request->name;
            $account->username = str_shuffle(md5(date("dhis")));
            $account->role = $request->role;
            $account->phone = $request->phone;
            $account->email = $request->email;
            $account->password = Hash::make($request->password);
            $account->reg_id = Auth::guard('admin')->user()->id;
            $account->token = str_shuffle(md5(date("ymdhis")));
            $account->save();

            return redirect()->back()->with('success', 'Created Successfully.');

        }catch (\Exception $e){
            return back()->with('warning', $e->getMessage());
        }
    }

    public function accountDetails ($token) {
        try {
              $account = Admin::where('status', 1)->where('token', $token)->first();
              if($account) {
                  return view('backend.account.details', compact('account'));
              }else {
                  return redirect()->back()->with('warning', 'User not found ');
              }

        }catch (\Exception $e){
            return back()->with('warning', $e->getMessage());
        }
    }

    public function editAccount ($token) {
        return $token;
    }

}
