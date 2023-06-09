<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationRequest;
use App\Models\Communication;
use App\Models\CommunicationType;
use App\Models\ToCommucationType;
use App\Models\ToCommunication;
use App\Models\Notification;
use App\Models\Responbility;
use App\Models\ToNotification;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{


    public function communicationSent()
    {
        return view('user.communicationsSent');
    }
    public function communicationReceive()
    {
        return view('user.communicationsReceive');
    }

    public function insert(CommunicationRequest $request)
    {
        $Communication = Communication::create([
            'communication_type_id' => $request->type,
            'date' => Carbon::now(),
            'message' => $request->message,
            'to' => implode(',', $request->to),
            'user_id' => Auth()->user()->id
        ]);
        $notification = Notification::create([
            'user_id' => Auth()->user()->id,
            'communication_id' => $Communication->id,
        ]);
        foreach ($request->to as $item) {
            ToCommunication::create([
                'communication_id' => $Communication->id,
                'user_id' => $item
            ]);
            ToNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $item
            ]);
        }
        return response()->json([
            'success' => 'Success Create New Communication!'
        ], 200);
    }

    public function sent(Request $request)
    {
        if ($request->type != null) {
            $data = Communication::with([
                'user' => [
                    'userrole' => [
                        'role'
                    ]
                ],
                'CommunicationType',
                'ToCommunication' => [
                    'user'
                ]
            ])->where('user_id', Auth()->user()->id)
                ->where('communication_type_id', $request->type)
                ->when($request->year !== '-1', function ($query) use ($request) {
                    return $query->whereYear('date', $request->year);
                })
                ->when($request->month !== '-1', function ($query) use ($request) {
                    return $query->whereMonth('date', $request->month);
                })
                ->orderBy('created_at', 'desc')
                ->paginate(6);
            $links = $data->links('layouts.paginate');
        } else {
            $data = Communication::with([
                'user' => [
                    'userrole' => [
                        'role'
                    ]
                ],
                'CommunicationType',
                'ToCommunication' => [
                    'user'
                ]
            ])->where('user_id', Auth()->user()->id)
                ->when($request->year !== '-1', function ($query) use ($request) {
                    return $query->whereYear('date', $request->year);
                })
                ->when($request->month !== '-1', function ($query) use ($request) {
                    return $query->whereMonth('date', $request->month);
                })
                ->orderBy('created_at', 'desc')
                ->paginate(6);
            $links = $data->links('layouts.paginate');
        }

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

    public function receive(Request $request)
    {
        if ($request->type != null) {
            $data = Communication::with([
                'CommunicationType',

                'user' => [
                    'userrole' => [
                        'role'
                    ]
                ],
            ])
                ->join('to_communications', 'to_communications.communication_id', '=', 'communications.id')
                ->where('to_communications.user_id', Auth()->user()->id)
                ->where('communications.communication_type_id', $request->type)
                ->when($request->month !== '-1', function ($query) use ($request) {
                    return $query->whereMonth('date', $request->month);
                })
                ->when($request->year !== '-1', function ($query) use ($request) {
                    return $query->whereYear('date', $request->year);
                })
                ->select('communications.*')
                ->orderBy('created_at','desc')
                ->paginate(6);
            $links = $data->links('layouts.paginate');
        } else {
            $data = Communication::with([
                'CommunicationType',
                'user' => [
                    'userrole' => [
                        'role'
                    ]
                ],
            ])
                ->join('to_communications', 'to_communications.communication_id', '=', 'communications.id')
                ->where('to_communications.user_id', Auth()->user()->id)
                ->when($request->year !== '-1', function ($query) use ($request) {
                    return $query->whereYear('date', $request->year);
                })
                ->when($request->month !== '-1', function ($query) use ($request) {
                    return $query->whereMonth('date', $request->month);
                })
                ->select('communications.*')
                ->orderBy('created_at','desc')
                ->paginate(6);
            $links = $data->links('layouts.paginate');
        }
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
    public function receiveUncomplete(Request $request)
    {

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
            })->join('rules','rules.id','=','responsbilities.rule_id')
              ->join('to_rules','to_rules.rule_id','=','rules.id')
              ->whereIn('to_rules.role_id',Auth()->user()->userrole->pluck('role_id')->toarray())
              ->select('responsbilities.*')
              ->orderBy('created_at','desc')
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
    public function receiveComplete(Request $request)
    {

        $data = Communication::with(['CommunicationType', 'user'])
            ->join('to_communications', 'to_communications.communication_id', '=', 'communications.id')
            ->where('to_communications.user_id', Auth()->user()->id)
            ->where('status', 1)
            ->select('communications.*')
            ->limit(3)
            ->get();

        return response()->json($data);
    }

    public function data()
    {
        $data = CommunicationType::where('status', 'task')->get();
        return response()->json($data);
    }


    public function check($id)
    {
        $data = Communication::findorfail($id);
        $data->update([
            'status' => 1,
        ]);
        return response()->json($data);
    }
    public function done($id)
    {
        $data = Responbility::findorfail($id);
        $data->update([
            'status' => 1,
        ]);
        return response()->json($data);
    }
}
