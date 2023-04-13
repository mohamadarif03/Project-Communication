<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationTypeRequest;
use App\Http\Requests\CommunicationUpdateTypeRequest;
use App\Models\CommunicationType;
use App\Models\Rule;
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
        $rule = Rule::where('communication_type_id',$id)->count();
        if($rule > 0){
            return response()->json([
                'error' => "there is a user with this role, can't delete it"
            ],400);
        }
        CommunicationType::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Role!'
        ],200);

    }
}
