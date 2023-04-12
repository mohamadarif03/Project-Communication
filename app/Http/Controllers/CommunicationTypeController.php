<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationTypeRequest;
use App\Models\CommunicationType;
use Illuminate\Http\Request;

class CommunicationTypeController extends Controller
{
    public function index(){

        $data = CommunicationType::paginate(5);
        return view('admin.communications', [
            'data' => $data
        ]);
    }
    public function insert(CommunicationTypeRequest $request)
    {
        CommunicationType::create([
            'type' => $request ->type,
            'color' => $request ->color,
        ]);
        return response()->json(['message' => 'Success Create New User!']);
    }
}
