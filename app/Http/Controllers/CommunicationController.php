<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationRequest;
use App\Models\Communication;
use App\Models\ToCommucationType;
use App\Models\ToCommunication;
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
        foreach($request->to as $item){
            ToCommunication::created([
                'communication_id' => $Communication->id,
                'user_id' => $item
            ]);
        }
        return response()->json([
            'success' => 'Success Create New Communication!'
        ],200);
    }

    public function sent(){
        $data = Communication::with([
            'CommunicationType',
            'ToCommunication' => [
                'user'
            ]
            ])->where('user_id',Auth()->user()->id)->paginate(6);
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

    public function receive(){
        $data = Communication::with(['CommunicationType','user'])
                            ->join('users','users.id','=','Communications.user_id')
                            ->where('communications.user_id',Auth()->user()->id)
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
}
