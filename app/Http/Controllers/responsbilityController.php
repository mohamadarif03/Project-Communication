<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;

class ResponsbilityController extends Controller
{
    public function view(){
        return view('user.responsbility');
    }

    public function task_type(){
        $data = Rule::with('fromrule','torule','communicationtype')
                    ->join('from_rules','from_rules.rule_id','=','rules.id')
                    ->whereIn('from_rules.role_id',Auth()->user()->userrole->pluck('role_id')->toarray())
                    ->select('rules.*')
                    ->get();
        return response()->json($data);
    }
}
