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
}
