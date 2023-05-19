<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResponsbilityRequest;
use App\Models\Notification;
use App\Models\Responbility;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\ToNotification;
use App\Models\ToRule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResponsbilityController extends Controller
{
    public function view(){
        return view('user.responsbilitySent');
    }
    public function viewReceive(){
        return view('user.responsbilityReceive');
    }

    public function task_type(){
        $data = Rule::with('fromrule','torule','communicationtype')
                    ->whereHas('fromrule',function($query){
                        $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                    })->get();
        return response()->json($data);
    }
    public function task_type_filter(){
        $data = Rule::with('fromrule','torule','communicationtype')
                    ->whereHas('fromrule',function($query){
                        $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                    })->get();
        return response()->json($data);
    }

    public function insert(ResponsbilityRequest $request){
        $upload = null;
        if($request->file('file')){
            $upload = Storage::disk('public')->put('file',  $request ->file('file'));
        }

        $data = Responbility::create([
            'rule_id' => $request ->type,
            'user_id' => Auth::user()->id,
            'date' => Carbon::now(),
            'link' => $request ->link,
            'file' => $upload,
        ]);

        $to = ToRule::where('rule_id',$request->type)->pluck('role_id')->toarray();
        $user = User::whereHas('userrole',function($query) use ($to){
                        $query->whereIn('role_id',$to);
                      })->pluck('id')
                        ->toarray();
        $notif = Notification::create([
            'responsbility_id'=> $data->id,
            'user_id' => Auth()->user()->id
        ]);
        foreach($user as $item){
            ToNotification::create([
                'user_id' => $item,
                'notification_id' => $notif->id
            ]);
        }
        return response()->json(['message' => 'Success Create New Type!']);
    }

    public function sent(Request $request){
        $data = Responbility::with([
            'user' =>[
                'userrole' => [
                    'role'
                ]
            ],
            'rule' => [
                'communicationType'
            ]
            ])->where('user_id',Auth()->user()->id)
            ->where('status', $request->status)
            ->orWhere(function($query) use ($request) {
                $query
                ->where('user_id', Auth()->user()->id)
                ->where('status', 0);
                if ($request->status != 2) {
                    $query->where('status', 1);
                }
            })
            ->when($request->type !== '-1',function($query) use ($request){
                return $query->where('responsbilities.rule_id',$request->type);
            })->when($request->year !== '-1', function($query) use ($request) {
                return $query->whereYear('date', $request->year);
            })->when($request->month !== '-1', function($query) use ($request) {
                return $query->whereMonth('date', $request->month);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $data = Responbility::with([
            'user' =>[
                'userrole' => [
                    'role'
                ]
            ],
            'rule' => [
                'communicationType'
            ]
            ])->where('user_id',Auth()->user()->id)
            ->when($request->type !== '-1',function($query) use ($request){
                return $query->where('responsbilities.rule_id',$request->type);
            })
            ->when($request->status !== '-1', function($query) use ($request) {
                return $query->where('status', $request->status);
            })->when($request->year !== '-1', function($query) use ($request) {
                return $query->whereYear('date', $request->year);
            })->when($request->month !== '-1', function($query) use ($request) {
                return $query->whereMonth('date', $request->month);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        

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

    public function receive(Request $request){
        $data = Responbility::with([
            'user' => [
                'userrole' =>[
                    'role'
                ]
            ],
            'rule' => [
                'CommunicationType'
            ]
            ])
            ->when($request->year !== '-1', function($query) use ($request) {
                return $query->whereYear('date', $request->year);
            })
            ->when($request->status !== '-1', function($query) use ($request) {
                return $query->where('status', $request->status);
            })
            ->when($request->type !== '-1',function($query) use ($request){
                return $query->where('responsbilities.rule_id',$request->type);
            })->when($request->month !== '-1', function($query) use ($request) {
                return $query->whereMonth('date', $request->month);
            })->whereHas('rule',function($query){
                $query->whereHas('torule',function($query){
                    $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->paginate(6);
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
    public function receiveUncomplete(Request $request){
        $data = Responbility::with([
            'user' => [
                'userrole' =>[
                    'role'
                ]
            ],
            'rule' => [
                'CommunicationType'
            ]
            ])
            ->where('status', 0)
            ->whereHas('rule',function($query){
                $query->whereHas('torule',function($query){
                    $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->orderBy('created_at', 'desc')->get()->take(3);
        return response()->json($data);
    }
    public function receiveComplete(Request $request){
        $data = Responbility::with([
            'user' => [
                'userrole' =>[
                    'role'
                ]
            ],
            'rule' => [
                'CommunicationType'
            ]
            ])
            ->where('status', 1)
            ->whereHas('rule',function($query){
                $query->whereHas('torule',function($query){
                    $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->orderBy('created_at', 'desc')->get()->take(3);
        return response()->json($data);
    }
}
