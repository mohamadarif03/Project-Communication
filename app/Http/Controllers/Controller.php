<?php

namespace App\Http\Controllers;

use App\Charts\CommunicationChart;
use App\Models\Communication;
use App\Models\CommunicationType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(CommunicationChart $CommunicationChart){
        if(in_array(1,Auth()->user()->userrole->pluck('role_id')->toarray())){ 
            $userCount = User::count();
            $communicationtypeCount = CommunicationType::count();
            $role = Role::count();
            return view('admin.dashboard', compact('userCount', 'communicationtypeCount', 'role'));
        }else{
            $userId = Auth::user()->id;
            $userIdString = strval($userId); 
            $communicationCount = Communication::whereRaw("FIND_IN_SET('$userIdString', `to`)")->count();
            $complete = Communication::whereRaw("FIND_IN_SET('$userIdString', `to`)")->where('status', 1)->count();
            $uncomplete = Communication::whereRaw("FIND_IN_SET('$userIdString', `to`)")->where('status', 0)->count();
            
            return view('user.dashboard', [
                'CommunicationChart' => $CommunicationChart->build(),
                'communicationCount' => $communicationCount,
                'complete' => $complete,
                'uncomplete' => $uncomplete
            ]);
        }
    }
   
}
