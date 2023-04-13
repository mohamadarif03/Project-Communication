<?php

namespace App\Http\Controllers;

use App\Models\CommunicationType;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index(){

        $data = CommunicationType::orderBy('created_at', 'desc')->get();
        $rule = Rule::orderBy('created_at', 'desc')->get();

        return view('admin.rules', compact('data', 'rule'));
    }
    public function insert(Request $request)
    {
        Rule::create([
            'communication_type_id' => $request ->communication_type_id,
            'how' => $request ->how,
        ]);

        return response()->json(['message' => 'Success Create New User!']);
    }
}
