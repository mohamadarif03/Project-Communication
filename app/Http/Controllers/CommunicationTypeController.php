<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationTypeRequest;
use App\Http\Requests\CommunicationUpdateTypeRequest;
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
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function update(CommunicationUpdateTypeRequest $request, $id)
    {
        $data = CommunicationType::find($id);
        $data->update([
            'type' => $request->type,
            'color' => $request->color,
        ]);
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function delete($id)
    {
        $data = CommunicationType::find($id);
        $data->delete();
        return response()->json(['message' => 'Success Delete Type!']);

    }
}
