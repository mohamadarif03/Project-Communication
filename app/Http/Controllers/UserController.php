<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function view(Request $request)
    {
        return view('admin.users');
    }
    public function data(Request $request){
        if($request->search){
            $data = User::with([
                'userrole' => [
                    'role'
                ]
            ])->join('user_roles','users.id','=','user_roles.user_id')
              ->where('users.name','!=','admin')
              ->where('user_roles.role_id',$request->search)
              ->paginate(9);
        }else{
            $data = User::with([
                'userrole' => [
                    'role'
                ]
            ])->where('name','!=','admin')->paginate(9);
        }
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
    public function insert(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile' => $request->profile,
        ]);

        foreach($request->role as $item){
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => $item
            ]);
        }
        $role = implode(',',$request->role);
        $user->role = $role;
        $user->save();
        return response()->json(['message' => 'Success Create New User!']);
    }

    public function update(Request $request,$id){
        $user = user::findorfail($id);
        UserRole::where('user_id',$id)->delete();
        foreach($request->role as $data){
            UserRole::create([
                'user_id' => $id,
                'role_id' => $data
            ]);
        }
        $role = implode(',',$request->role);
        $user->role = $role;
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role
        ]);
        return response()->json([
            'success' => 'Success Update User'
        ]);
    }

    public function delete($id){
        user::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete User'
        ]);
    }
    public function dataUser(){
        $data = User::with([
            'userrole' => [
                'role'
            ]
        ])->where('name','!=','admin')->get();
        return response()->json($data);
    }
}
