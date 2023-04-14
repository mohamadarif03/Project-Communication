<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleRequest;
use App\Http\Requests\UpdateRuleRequest;
use App\Models\CommunicationType;
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
            $data = Rule::with(['communicationType','torule'])
                    ->where('communication_type_id',$request->search)
                    ->get();
        
        }else{
            $data = Rule::with(['communicationType','torule'])->get();
        }
        return response()->json($data);
        
    }
    public function insert(RuleRequest $request)
    {
        $rule = Rule::create([
            'communication_type_id' => $request ->communication_type,
            'how' => $request ->how,
            'to' => implode(',',$request->to)
        ]);
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

    public function update(UpdateRuleRequest $request,$id){
        $rule = Rule::findorfail($id);
        ToRule::where('rule_id',$rule->id)->delete();
        foreach($request->to as $item){
            ToRule::create([
                'rule_id' => $rule->id,
                'role_id' => $item
            ]);
        }
        $rule->update([
            'communication_type_id' => $request ->communication_type,
            'how' => $request ->how,
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
