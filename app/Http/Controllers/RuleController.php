<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleRequest;
use App\Models\CommunicationType;
use App\Models\FromRule;
use App\Models\Rule;
use App\Models\ToRule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function view(){
        $data = CommunicationType::orderBy('created_at', 'desc')->get();
        return view('admin.rules', compact('data'));
    }
    public function data(Request $request){
        if($request->search){
            $data = Rule::with([
                'CommunicationType',
                'torule',
                'fromrule' => [
                    'role'
                ]
            ])->where('communication_type_id',$request->search)
              ->orderBy('created_at','desc')
              ->paginate(9);
        }else{
            $data = Rule::with([
                'CommunicationType',
                'torule',
                'fromrule' => [
                    'role'
                ]
            ])->orderBy('created_at','desc')->paginate(9);    
        }
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
    public function insert(RuleRequest $request)
    {
        $rule = Rule::create([
            'communication_type_id' => $request->communication_type,
            'how' => $request ->how,
            'from' => implode(',',$request->from),
            'to' => implode(',',$request->to)
        ]);
        foreach($request->from as $item){
            FromRule::create([
                'rule_id' => $rule->id,
                'role_id' => $item
            ]);
        }
        

        foreach($request->to as $item){
            ToRule::create([
                'rule_id' => $rule->id,
                'role_id' => $item
            ]);
        }

        return response()->json([
            'success' => 'Success Create New Rule!'
        ]);
    }

    public function update(RuleRequest $request,$id){
        $rule = Rule::findorfail($id);
        ToRule::where('rule_id',$rule->id)->delete();
        foreach($request->to as $item){
            ToRule::create([
                'rule_id' => $rule->id,
                'role_id' => $item
            ]);
        }
        $rule->update([
            'communication_type_id' => $request->communication_type,
            'how' => $request->how,
            'to' => implode(',',$request->to)
        ]);
        return response()->json([
            'success' => 'Success Update Rule!'
        ]);
    }

    public function delete($id){
        Rule::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Data!'
        ]);
    }
}
