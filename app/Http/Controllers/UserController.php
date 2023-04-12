<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->get();
        return view('admin.users', compact('data'));
    }
    public function getData()
    {
        $data = DB::table('users')->get();
        return response()->json($data);
    }
    public function insert(UserRequest $request)
    {
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => Hash::make($request -> password),
            // 'role' => $request ->role,
        ]);
        return response()->json(['message' => 'Success Create New User!']);
    }
}
