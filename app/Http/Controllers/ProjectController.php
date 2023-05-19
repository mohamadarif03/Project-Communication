<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\GoogleSheetService;
use App\Models\Project;
use App\Models\ProjectMember;

class ProjectController extends Controller
{
    public function view()
    {
        if(in_array('8',Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array('9',Auth()->user()->userrole->pluck('role_id')->toarray())){
            return view('user.projectmanager');
        }
        return view('user.project');
    }
    public function projectTeam($id)
    {
        $data = Project::findorfail($id);
        return view('user.projectTeam',['data' => $data ]);
    }
    public function projectResponsbility($id)
    {
        $data = Project::findorfail($id);
        return view('user.projectResponsbility',['data' => $data]);
    }
    public function addProject()
    {
        return view('user.addproject');
    }
    public function viewupdate($id)
    {
        $data = Project::findorfail($id);
        return view('user.updateproject',['data' => $data]);
    }
    public function download($type){
        if($type == 'small'){
            $filePath = public_path('template/Small.xlsx');
            return response()->download($filePath, 'SmallProject.xlsx');
        }else if($type == 'medium'){
            $filePath = public_path('template/Medium.xlsx');
            return response()->download($filePath, 'MediumProject.xlsx');
        }else if($type == 'large'){
            $filePath = public_path('template/Large.xlsx');
            return response()->download($filePath, 'LargeProject.xlsx');
        }
    }

    public function data(Request $request){
        if($request->year === '-1'){
            if(in_array(8,Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array(9,Auth()->user()->userrole->pluck('role_id')->toarray())){
                $data = Project::where('status','LIKE','%'.$request->status.'%')
                ->paginate(6);
            }else{
                $data = Project::whereHas('projectmember', function($query) {
                    $query->where('user_id', Auth()->user()->id);
                })->where('status','LIKE','%'.$request->status.'%')
                ->paginate(6);
            }
        }else{
            if(in_array(8,Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array(9,Auth()->user()->userrole->pluck('role_id')->toarray())){
                $data = Project::where('status','LIKE','%'.$request->status.'%')
                ->whereYear('created_at',$request->year)
                ->paginate(6);
            }else{
                $data = Project::whereHas('projectmember', function($query) {
                    $query->where('user_id', Auth()->user()->id);
                })->where('status','LIKE','%'.$request->status.'%')
                ->whereYear('created_at',$request->year)
                ->paginate(6);
            }
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

    public function mark($id){
        Project::findorfail($id)->update([
            'status' => 'done'
        ]);
        return response()->json(['message' => 'success']);
    }
    public function delete($id){
        $user = ProjectMember::where('project_id',$id)->delete();
        
        Project::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Role!'
        ],200);
    }
    
}
