<?php

namespace App\Http\Controllers;

use App\Charts\CommunicationChart;
use App\Models\Communication;
use Illuminate\Http\Request;
use Carbon\Carbon;
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

    public function index(CommunicationChart $CommunicationChart)
    {
        if (in_array(1, Auth()->user()->userrole->pluck('role_id')->toarray())) {
            $userCount = User::count();
            $communicationtypeCount = CommunicationType::count();
            $role = Role::count();
            return view('admin.dashboard', compact('userCount', 'communicationtypeCount', 'role'));
        } else {
            $complete = Responbility::where('status', 1)
                ->whereHas('rule', function ($query) {
                    $query->whereHas('torule', function ($query) {
                        $query->whereIn('role_id', Auth()->user()->userrole->pluck('role_id')->toarray());
                    });
                })
                ->count();
            $uncomplete = Responbility::where('status', 0)
                ->whereHas('rule', function ($query) {
                    $query->whereHas('torule', function ($query) {
                        $query->where('role_id', Auth()->user()->userrole->pluck('role_id')->toArray());
                    });
                })
                ->count();
                $uncompletesent = Responbility::where('status', 0)->where('user_id',Auth()->user()->id)
                    ->count();
                $completesent = Responbility::where('status', 1)->where('user_id',Auth()->user()->id)
                    ->count();

            $communicationCount = $complete + $uncomplete + $completesent + $uncompletesent;
            return view('user.dashboard', [
                'complete' => $complete + $completesent,
                'uncomplete' => $uncomplete + $uncompletesent,
                'total' => $communicationCount
            ]);
        }
    }

    public function chart(Request $request)
    {
        $now = Carbon::now();
        $complete = Responbility::where('status', 1)
            ->whereHas('rule', function ($query) {
                $query->whereHas('torule', function ($query) {
                    $query->whereIn('role_id', Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->when($request->month !== '-1', function ($query) use ($request) {
                return $query->whereMonth('date', $request->month);
            })->whereYear('date', $now->year)
            ->count();
        $uncomplete = Responbility::where('status', 0)
            ->whereHas('rule', function ($query) {
                $query->whereHas('torule', function ($query) {
                    $query->whereIn('role_id', Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->when($request->month !== '-1', function ($query) use ($request) {
                return $query->whereMonth('date', $request->month);
            })->whereYear('date', $now->year)
            ->count();
        $communicationCount = $complete + $uncomplete;
        return response()->json([
            'complete' => $complete,
            'uncomplete' => $uncomplete,
            'total' => $communicationCount
        ]);
    }
}
