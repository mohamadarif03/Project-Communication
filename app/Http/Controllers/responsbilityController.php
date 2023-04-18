<?php

namespace App\Http\Controllers;

use App\Models\Responbility;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\ToNotification;
use App\Models\ToRule;
use App\Models\User;
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
        $upload = '';
        if($request->file('file')){
            $upload = Storage::disk('public')->put('file',  $request ->file('file'));
        }

        $data = Responbility::create([
            'rule_id' => $request ->type,
            'user_id' => Auth::user()->id,
            'date' => $request ->date,
            'link' => $request ->link,
            'file' => $upload,
        ]);

        $to = ToRule::where('rule_id',$request->type)->pluck('role_id')->toarray();
        $user = User::join('user_roles','user_roles.user_id','=','users.id')
                      ->whereIn('users.id',$to)
                      ->pluck('users.id')
                      ->toarray();
        foreach($user as $item){
            ToNotification::create([
                'user_id' => $item,
                'responsbility_id' => $data->id
            ]);
        }
        return response()->json(['message' => 'Success Create New Type!']);
    }

    public function sent(){
        $data = Responbility::with([
            'user',
            'rule' => [
                'communicationType'
            ]
            ])
                             ->where('user_id',Auth()->user()->id)
                             ->paginate(6);

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

    public function receive(){
        $data = Responbility::with([
            'user',
            'rule' => [
                'CommunicationType'
            ]
            ])
                              ->join('rules','rules.id','=','responsbilities.rule_id')
                              ->join('to_rules','to_rules.rule_id','=','rules.id')
                              ->whereIn('to_rules.role_id',Auth()->user()->userrole->pluck('role_id')->toarray())
                              ->select('responsbilities.*')
                              ->paginate(6);
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
}
