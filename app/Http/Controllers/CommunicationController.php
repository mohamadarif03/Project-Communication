<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
   

    public function communication()
    {
        return view('user.communications');

    }
}
