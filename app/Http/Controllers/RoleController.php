<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('admin.roles');
    }

    public function data(){
        $data = Role::all();
        return response()->json($data);
    }

    public function store(RoleRequest $request){
        Role::create([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => 'Success Create New Role!'
        ]);
    }
    public function update(UpdateRoleRequest $request,$id){
        Role::findorfail($id)->update([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => 'Success Update Role!'
        ]);
    }
    public function delete($id){
        $user = UserRole::where('role_id',$id)->count();
        if($user > 0){
            return response()->json([
                'error' => "there is a user with this role, can't delete it"
            ]);
        }
        Role::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Role!'
        ]);
    }
}
