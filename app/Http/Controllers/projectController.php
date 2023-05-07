<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\GoogleSheetService;
use App\Models\Project;

class ProjectController extends Controller
{
    public function view()
    {
        return view('user.project');
    }
    public function view1($id)
    {
        $data = Project::findorfail($id);
        return view('user.projectTeam',['data' => $data ]);
    }
    public function view2()
    {
        return view('user.projectResponsbility');
    }
    public function view3()
    {
        return view('user.addproject');
    }
    public function viewupdate()
    {
        return view('user.updateproject');
    }
    public function download($type){
        if($type == 'small'){
            $filePath = public_path('template\small.xlsx');
            return response()->download($filePath, 'SmallProject.xlsx');
        }else if($type == 'medium'){
            $filePath = public_path('template\medium.xlsx');
            return response()->download($filePath, 'MediumProject.xlsx');
        }else if($type == 'large'){
            $filePath = public_path('template\large.xlsx');
            return response()->download($filePath, 'LargeProject.xlsx');
        }
    }

    public function data(){
        $data = Project::paginate(6);
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
