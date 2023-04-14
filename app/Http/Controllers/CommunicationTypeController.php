<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationTypeRequest;
use App\Http\Requests\CommunicationUpdateTypeRequest;
use App\Models\CommunicationType;
use App\Models\Rule;
use Illuminate\Http\Request;

class CommunicationTypeController extends Controller
{
    public function view(){

        $data = CommunicationType::where('status', 'task')->paginate(5);
        // dd($data);
        return view('admin.communicationsTask', [
            'data' => $data
        ]);
    }
    public function insert(CommunicationTypeRequest $request)
    {
        CommunicationType::create([
            'type' => $request ->type,
            'color' => $request ->color,
            'description' => $request ->description,
            'status' => 'task'
        ]);
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function update(CommunicationUpdateTypeRequest $request, $id)
    {
        $data = CommunicationType::find($id);
        $data->update([
            'type' => $request->type,
            'color' => $request->color,
            'description' => $request->description,
        ]);
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function delete($id)
    {
        $rule = Rule::where('communication_type_id',$id)->count();
        if($rule > 0){
            return response()->json([
                'error' => "This Data Is In Use, Cannot Delete Data"
            ],400);
        }
        CommunicationType::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Data!'
        ],200);

    }


    public function viewStandart(){

        $data = CommunicationType::where('status', 'standart')->paginate(5);
        // dd($data);
        return view('admin.communicationsStandart', [
            'data' => $data
        ]);
    }
    public function insertStandart(CommunicationTypeRequest $request)
    {
        CommunicationType::create([
            'type' => $request ->type,
            'color' => $request ->color,
            'description' => $request ->description,
            'status' => 'standart'
        ]);
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function updateStandart(CommunicationUpdateTypeRequest $request, $id)
    {
        $data = CommunicationType::find($id);
        $data->update([
            'type' => $request->type,
            'color' => $request->color,
            'description' => $request->description,
        ]);
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function deleteStandart($id)
    {
        $rule = Rule::where('communication_type_id',$id)->count();
        if($rule > 0){
            return response()->json([
                'error' => "This Data Is In Use, Cannot Delete Data"
            ],400);
        }
        CommunicationType::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Data!'
        ],200);

    }
}
