<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationTypeRequest;
use App\Http\Requests\CommunicationTypeRequestStandart;
use App\Http\Requests\CommunicationTypeRequestTask;
use App\Http\Requests\CommunicationUpdateTypeRequest;
use App\Models\CommunicationType;
use App\Models\FromCommunicationType;
use App\Models\Rule;
use App\Models\ToCommucationType;
use Illuminate\Http\Request;

class CommunicationTypeController extends Controller
{
    public function view(){

        
        return view('admin.communicationsTask');
    }
    public function data(){
        $data = CommunicationType::where('status', 'task')->get();

        return response()->json($data);
    }
    public function insert(CommunicationTypeRequestTask $request)
    {
        $data = CommunicationType::create([
            'type' => $request ->type,
            'color' => $request ->color,
            'description' => $request ->description,
            'status' => 'task'
        ]);
        foreach($request->from as $item){
            FromCommunicationType::create([
                'communication_type_id' => $data->id,
                'role_id' => $item
            ]);
        }
        $role = implode(',',$request->from);
        $data->from = $role;
        $data->save();
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function update(CommunicationTypeRequestTask $request, $id)
    {
        $data = CommunicationType::find($id);
        $data->update([
            'type' => $request->type,
            'color' => $request->color,
            'description' => $request->description,
            'status' => 'task'
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
    public function dataStandart(){
        $data = CommunicationType::where('status', 'standart')->get();
        return response()->json($data);
    }
    public function insertStandart(CommunicationTypeRequestStandart $request)
    {
        $data = CommunicationType::create([
            'type' => $request ->type,
            'color' => $request ->color,
            'description' => $request ->description,
            'status' => 'standart'
        ]);
        foreach($request->to as $item){
            ToCommucationType::create([
                'communication_type_id' => $data->id,
                'role_id' => $item
            ]);
        }
        $role = implode(',',$request->to);
        $data->to = $role;
        $data->save();
        return response()->json(['message' => 'Success Create New Type!']);
    }
    public function updateStandart(CommunicationTypeRequestStandart $request, $id)
    {
        $data = CommunicationType::find($id);
        $data->update([
            'type' => $request->type,
            'color' => $request->color,
            'description' => $request->description,
            'status' => 'status',
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
