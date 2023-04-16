<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function view(){
        return view('admin.roles');
    }

    public function data(){
        $data = Role::where('name','!=','Admin')->get();
        return response()->json($data);
    }

    public function paginate(){
        $data = Role::where('name','!=','Admin')->paginate(2);

        $links = $data->links('layouts.paginate');
        return response()->json([
            'data' => $data,
            'links' => $links->render(),
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ]
        ]);
    }

    public function store(RoleRequest $request){
        Role::create([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => 'Success Create New Role!'
        ],200);
    }
    public function update(UpdateRoleRequest $request,$id){
        Role::findorfail($id)->update([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => 'Success Update Role!'
        ],200);
    }
    public function delete($id){
        $user = UserRole::where('role_id',$id)->count();
        if($user > 0){
            return response()->json([
                'error' => "there is a user with this role, can't delete it"
            ],400);
        }
        Role::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Role!'
        ],200);
    }


}
