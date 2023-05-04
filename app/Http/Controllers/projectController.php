<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function view()
    {
        return view('user.project');
    }
    public function view1()
    {
        return view('user.project1');
    }
    public function view2()
    {
        return view('user.project2');
    }
    public function view3()
    {
        return view('user.addproject');
    }
    public function download(Request $request){
        if($request->type == 'small'){
            $filePath = storage_path('app\public\excel\small.xlsx');
            return response()->download($filePath, 'SmallProject.xlsx');
        }else if($request->type == 'medium'){
            $filePath = storage_path('app\public\excel\medium.xlsx');
            return response()->download($filePath, 'MediumProject.xlsx');
        }else if($request->type == 'big'){
            $filePath = storage_path('app\public\excel\LargeProject.xlsx');
            return response()->download($filePath, 'LargeProject.xlsx');
        }
    }
    public function createProjectTeam(Request $request){
        
    }
}
