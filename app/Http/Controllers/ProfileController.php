<?php

namespace App\Http\Controllers;

use App\Http\Requests\profilRequest;
use App\Http\Requests\ResetRequest;
use App\Models\Rule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function view()
    {
        return view('profil');
    }
    public function view1()
    {
        return view('profil1');
    }
    public function update(ProfilRequest $request, $id)
    {
        $data = User::find($id);
        if($request->hasFile('profile')) {
            $foto = $data->profile;
            Storage::delete('public/'.$foto);
            $foto = Storage::disk('public')->put('profile',$request->file('profile'));
            $data->profile = $foto;
        }
        
        $data->fill([
            'name' => $request->name,
            'email' => $request->email,
        ])->save();
      
        return redirect()->back()->withSuccess('Profile Has Been Update');
    }
    public function reset(ResetRequest $request, $id)
    {
        $data = User::find($id);
       
        $data->fill([
            'password' => Hash::make($request->password),
        ])->save();
      
        return redirect()->back()->withSuccess('Profile Has Been Update');
    }
    
}
