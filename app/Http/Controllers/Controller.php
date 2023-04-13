<?php

namespace App\Http\Controllers;

use App\Models\CommunicationType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('user.dashboard');
    }

    public function admin(){

        $userCount = User::count();
        $communicationtypeCount = CommunicationType::count();
        $role = Role::count();
        return view('admin.dashboard', compact('userCount', 'communicationtypeCount', 'role'));
    }
   
}
