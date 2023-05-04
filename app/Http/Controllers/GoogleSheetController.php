<?php

namespace App\Http\Controllers;

use App\Http\Services\GoogleSheetService;
use Illuminate\Http\Request;

class GoogleSheetController extends Controller
{
    public function auth(){
        $sheet = new GoogleSheetService('Sheet1!A3:A3');
        $sheet->documentId = '1HTqU41OqoZv_rzF7iaPRWd3fIBSE9V33_Q-hv_ykVYM';
        $value = [];
        $value[0] = 'X';
        $sheet->writeSheet($value);
        dd($sheet->readSheet());
    }

    public function new(){
        $sheet = new GoogleSheetService('A1:A10');
        $tes = $sheet->createSheet('Sheet Baru aja 2');
        return response()->json($tes);
    }
}
