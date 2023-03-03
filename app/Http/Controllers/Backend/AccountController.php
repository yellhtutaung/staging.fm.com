<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Permission;
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


    // -------------- if you use users' roles , follow these points -----------------
    // when you use roles in app.php from config , index numbers of roles are added by 1
    // when you use users' roles number in database , roles numbers are reduced by 1

    public function addAccount () {
        $current_auth_user_role = Auth::guard('admin')->user()->role;
        $roles = Permission::get();
        return view('backend.account.add', compact('roles', 'current_auth_user_role'));
    }

    public function  createAccount (Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'role' => ['required'],
                'phone' => ['required', Rule::unique('users', 'phone')],
                'email' => ['nullable', Rule::unique('users', 'email')],
                'password' => ['required', 'min:6'],
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
        try {
            $account = Admin::where('status', 1)->where('token', $token)->first();
            if($account) {
                $current_auth_user_role = Auth::guard('admin')->user()->role;
                $roles = Permission::get();
                return view('backend.account.edit', compact('roles', 'account', 'current_auth_user_role'));
            }else {
                return redirect()->back()->with('warning', 'User not found ');
            }
        }catch (\Exception $e){
            return back()->with('warning', $e->getMessage());
        }
    }

    public function updateAccount (Request $request, $token) {
        try {
            $account = Admin::where('status', 1)->where('token', $token)->first();
            if(!$account) {
                return redirect()->back()->with('warning', 'User not found ');
            }

            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'role' => ['required'],
                'phone' => ['required', Rule::unique('users', 'phone')],
                'email' => ['nullable', Rule::unique('users', 'email')],
                'password' => ['nullable', 'min:6'],
            ]);

            if ( $validator->fails() ) {
                return redirect()->back()->with('warning',  $validator->errors()->first())->withInput();
            }

            $account->name = $request->name;
            $account->role = $request->role;
            $account->phone = $request->phone;
            $account->email = $request->email;
            $account->password = $request->password ? Hash::make($request->password) : $account->password;
            $account->update();
            return redirect()->back()->with('success', 'Updated successfully.');

        }catch (\Exception $e) {
            return back()->with('warning', $e->getMessage());
        }
    }

}
