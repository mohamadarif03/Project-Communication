<?php

namespace App\Http\Controllers;

use App\Models\CommunicationType;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index(){

        $data = CommunicationType::orderBy('created_at', 'desc');

        return view('admin.rules', compact('data'));
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
