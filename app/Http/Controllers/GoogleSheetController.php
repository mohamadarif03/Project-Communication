<?php

namespace App\Http\Controllers;

use App\Http\Services\GoogleSheetService;
use Illuminate\Http\Request;

class GoogleSheetController extends Controller
{
    public function auth(){
        $sheet = new GoogleSheetService('projectteam!C4:C8');
        $sheet->documentId = '1DJEAgPDiBlJGe1AdG1HA2MGx5KsvugS-_BlO3dqeG_8';
        dd($sheet->readSheet());
    }

    public function new(){
        $sheet = new GoogleSheetService('A1:A10');
        $tes = $sheet->createSheet('Sheet Baru aja 2');
        return response()->json($tes);
    }
}
