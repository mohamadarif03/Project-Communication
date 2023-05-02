<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function view()
    {
        return view('user.project');
    }
    public function view1()
    {
        return view('user.project1');
    }
}
