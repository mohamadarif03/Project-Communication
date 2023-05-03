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
}
