<?php

namespace App\Http\Controllers;

use App\Http\Requests\profilRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function view()
    {
        return view('profil');
    }
    public function update(ProfilRequest $request, $id)
    {
        $data = User::find($id);
        $data->update([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request->password),

        ]);
        return redirect()->back();
    }
}
