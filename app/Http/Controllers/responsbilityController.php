<?php

namespace App\Http\Controllers;

use App\Models\Responbility;
use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function insert(Request $request)
    {
        $upload = Storage::disk('public')->put('file',  $request ->file('file'));

        $data = Responbility::create([
            'rule_id' => $request ->type,
            'user_id' => Auth::user()->id,
            'date' => $request ->date,
            'link' => $request ->link,
            'file' => $upload,

        ]);
       
        return response()->json(['message' => 'Success Create New Type!']);
    }

    public function sent(){
        $data = Responbility::with('');
    }

    public function receive(){

    }
}
