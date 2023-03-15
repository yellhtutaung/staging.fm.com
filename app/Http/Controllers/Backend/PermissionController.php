<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class PermissionController extends Controller
{
    public function permissionList () {
        $permissions = Permission::OrderBy('order_sort_id')->get();

//        return $permissions;
        return view('backend.permission.list', compact('permissions'));
    }

    public function addPermission () {
        return view('backend.permission.add');
    }

    public function createPermission (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'notes' => ['nullable'],
            'account' => ['nullable'],
            'user' => ['nullable'],
            'fruit' => ['nullable'],
            'permission' => ['nullable'],
            'country' => ['nullable'],
        ]);
        if($validator->fails()){
            return  redirect()->back()->with('warning',  $validator->errors()->first())->withInput();
        }

        $account = array("account" => array(
            "list" => $request->account && Arr::exists($request->account, 'list') ?? false,
            "add" => $request->account && Arr::exists($request->account, 'add') ?? false,
            "edit" => $request->account && Arr::exists($request->account, 'edit') ?? false,
            "hide_show" => $request->account && Arr::exists($request->account, 'hide_show') ?? false,
            "details" => $request->account && Arr::exists($request->account, 'details') ?? false
        ));
        $user = array("user" => array(
            "list" => $request->user && Arr::exists($request->user, 'list') ?? false,
            "add" => $request->user && Arr::exists($request->user, 'add') ?? false,
            "edit" => $request->user && Arr::exists($request->user, 'edit') ?? false,
            "hide_show" => $request->user && Arr::exists($request->user, 'hide_show') ?? false,
            "details" => $request->user && Arr::exists($request->user, 'details') ?? false
        ));
        $fruit = array("fruit" => array(
            "list" => $request->fruit && Arr::exists($request->fruit, 'list') ?? false,
            "add" => $request->fruit && Arr::exists($request->fruit, 'add') ?? false,
            "edit" => $request->fruit && Arr::exists($request->fruit, 'edit') ?? false,
            "hide_show" => $request->fruit && Arr::exists($request->fruit, 'hide_show') ?? false,
            "details" => $request->fruit && Arr::exists($request->fruit, 'details') ?? false
        ));
        $permission = array("permission" => array(
            "list" => $request->permission && Arr::exists($request->permission, 'list') ?? false,
            "add" => $request->permission && Arr::exists($request->permission, 'add') ?? false,
            "edit" => $request->permission && Arr::exists($request->permission, 'edit') ?? false,
            "hide_show" => $request->permission && Arr::exists($request->permission, 'hide_show') ?? false,
            "details" => $request->permission && Arr::exists($request->permission, 'details') ?? false
        ));
        $country = array("country" => array(
            "list" => $request->country && Arr::exists($request->country, 'list') ?? false,
            "add" => $request->country && Arr::exists($request->country, 'add') ?? false,
            "edit" => $request->country && Arr::exists($request->country, 'edit') ?? false,
            "hide_show" => $request->country && Arr::exists($request->country, 'hide_show') ?? false,
            "details" => $request->country && Arr::exists($request->country, 'details') ?? false
        ));


        $permissions = [$account, $user, $fruit, $permission, $country];
        $permissions = json_encode($permissions, true);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->notes = $request->notes;
        $permission->guard_json = $permissions;
        $permission->save();
        return  redirect()->back()->with('success', 'Permisssion created successfully.');

    }

    public function editPermission ($id) {
        $permission = Permission::find($id);

        if(!$permission){
            return redirect()->back()->with('error', 'Permission not found.');
        }
        return view('backend.permission.edit', compact('permission'));
    }

    public function createRoleAndPermissions(Request $In)
    {
//        return $In;
        if (strlen($In->name) == 0 || is_null($In->permissionsJson))
        {
            return response()->json(['status'=>400,'message'=>'Plz fill all input'],400);
        }else{
            try {

                $fetchDescSort = Permission::orderBy('order_sort_id', 'desc')->first();
                $permissionDb = $In->updId == 0 || $In->updId == '0' ? new Permission() : Permission::find($In->updId);
                $permissionDb->name = $In->name;
                $permissionDb->order_sort_id = $fetchDescSort->order_sort_id + 1;
                $permissionDb->guard_json = json_encode($In->permissionsJson);
                $permissionDb->notes = $In->notes;
                $returnMessage = $In->updId == 0 ? 'Role and Permission created successfully' : 'Record updated .';
                if($permissionDb->save())
                   {
                        return response()->json(['status'=>200,'message'=>$returnMessage],200);
                   }
            }catch (\Exception $e )
            {
                return response()->json(['status'=>500,'message'=>$e->getMessage()],500);
            }
        }
    }

    public function permissionDetails ($id) {
        $permission = Permission::find($id);
        if(!$permission) {
            return redirect()->route('permissionList')->with('error', 'Permission not found.');
        }
        return view('backend.permission.details', compact('permission'));
    }

    public function deletePermission ($id) {
        $permission = Permission::find($id);
        if(!$permission) {
            return redirect()->route('permissionList')->with('error', 'Permission not found.');
        }
        $accounts = count($permission->accounts);
        if($accounts){
            return redirect()->route('permissionList')->with('error', 'There are accounts with this permission.');
        }
        $permission->delete();
        return redirect()->back()->with('delete', 'Permission deleted successfully!');
    }

    public function sort (Request $request) {
        $dataArr = $request->all()['data'];
        foreach ($dataArr as $data){
            $permission = Permission::find($data['id']);
            $permission->order_sort_id = $data['sort_id'];
            $permission->save();
        }



        return response()->json(['status' => 200, 'message' => 'Order changed.', 'data' => $request->all()]);
    }

}
