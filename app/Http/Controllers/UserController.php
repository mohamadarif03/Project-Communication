<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users');
    }
    public function insert(Request $request)
    {
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $request ->password,
        ]);
    }
}
