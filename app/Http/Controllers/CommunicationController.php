<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationRequest;
use App\Models\Communication;
use App\Models\CommunicationType;
use App\Models\ToCommucationType;
use App\Models\ToCommunication;
use App\Models\Notification;
use App\Models\ToNotification;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
   

    public function communication(){
        return view('user.communications');
    }

    public function insert(CommunicationRequest $request){
        $Communication = Communication::create([
            'communication_type_id' => $request->type,
            'date' => $request->date,
            'message' => $request->message,
            'to' => implode(',',$request->to),
            'user_id' => Auth()->user()->id
        ]);
        $notification = Notification::create([
            'user_id' => Auth()->user()->id,
            'communication_id' => $Communication->id,
        ]);
        foreach($request->to as $item){
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
        ],200);
    }

    public function sent(Request $request){
        if($request->type != null){
            $data = Communication::with([
                'CommunicationType',
                'ToCommunication' => [
                    'user'
                ]
                ])->where('user_id',Auth()->user()->id)
                ->where('communication_type_id',$request->type)
                ->whereYear('date',$request->year)
                ->whereMonth('date',$request->month)
                ->paginate(6);
            $links = $data->links('layouts.paginate');
        }else{
            $data = Communication::with([
                'CommunicationType',
                'ToCommunication' => [
                    'user'
                ]
                ])->where('user_id',Auth()->user()->id)
                ->whereYear('date',$request->year)
                ->whereMonth('date',$request->month)
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

    public function receive(Request $request){
        if($request->type != null){
            $data = Communication::with(['CommunicationType','user'])
                            ->join('to_communications','to_communications.communication_id','=','communications.id')
                            ->where('to_communications.user_id',Auth()->user()->id)
                            ->where('communications.communication_type_id',$request->type)
                            ->whereYear('communications.date',$request->year)
                            ->whereMonth('communications.date',$request->month)
                            ->select('communications.*')
                            ->paginate(6);
        $links = $data->links('layouts.paginate');
        }else{
            $data = Communication::with(['CommunicationType','user'])
                            ->join('to_communications','to_communications.communication_id','=','communications.id')
                            ->where('to_communications.user_id',Auth()->user()->id)
                            ->whereYear('communications.date',$request->year)
                            ->whereMonth('communications.date',$request->month)
                            ->select('communications.*')
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

    public function data(){
        $data = CommunicationType::where('status','task')->get();
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
    
}
