<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
   

    public function communication()
    {
        return view('user.communications');

    }
    public function insert(Request $request)
    {
        Communication::create([
            'communication_type_id' => $request->type,
            'date' => $request->date,
            'message' => $request->message
        ]);
        return response()->json([
            'success' => 'Success Create New Communication!'
        ],200);
    }
}
