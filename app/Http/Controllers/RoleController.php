<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('admin.roles');
    }

    public function store(RoleRequest $request){
        Role::create([
            'name' => $request->name
        ]);
        return response()->json(['message' => 'Success Create New Role!']);
    }
}
