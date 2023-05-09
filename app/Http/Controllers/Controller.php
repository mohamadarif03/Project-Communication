<?php

namespace App\Http\Controllers;

use App\Charts\CommunicationChart;
use App\Models\Communication;
use App\Models\Responbility;
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
            $complete = Responbility::where('status', 1)
                ->whereHas('rule',function($query){
                    $query->whereHas('torule',function($query){
                        $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                    });
                })->count();
            $uncomplete = Responbility::where('status', 0)
                ->whereHas('rule',function($query){
                    $query->whereHas('torule',function($query){
                        $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                    });
            })->count();
            $communicationCount = $complete + $uncomplete;
            return view('user.dashboard', [
                'communicationCount' => $communicationCount,
                'complete' => $complete,
                'uncomplete' => $uncomplete
            ]);
        }
    }
   
}
