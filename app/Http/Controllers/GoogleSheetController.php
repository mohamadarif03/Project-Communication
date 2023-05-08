<?php

namespace App\Http\Controllers;

use App\Http\Services\GoogleSheetService;
use App\Models\Project;
use App\Models\User;
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

    public function team(Request $request){
        $spreadSheetId = $request->id;
        $teamSheet = new GoogleSheetService('projectteam!B5:C8');
        $teamSheet->documentId = '12U_Y4cJ4ZbbpQd1BWmR0eml3hfBWvqsRM7NLMtWxopg';
        $arrayTeam = $teamSheet->readSheet();
        $dataTeam = $arrayTeam->values;
        $index = 0;
        foreach($dataTeam as $item){
            $dataTeam[$index][1] = User::whereIn('name', explode(',', $item[1]))
                              ->select('name', 'email', 'profile')
                              ->get()
                              ->toArray(); 
            $index++;
        }
        $index = 0;
        
        $creativeSheet = new GoogleSheetService('projectteam!C9:D24');
        $creativeSheet->documentId = '12U_Y4cJ4ZbbpQd1BWmR0eml3hfBWvqsRM7NLMtWxopg';
        $arrayCreative = $creativeSheet->readSheet();
        $dataCreative = $arrayCreative->values;
        foreach($dataCreative as $item){
            $dataCreative[$index][1] = User::whereIn('name', explode(',', $item[1]))
                              ->select('name', 'email', 'profile')
                              ->get()
                              ->toArray(); 
            $index++;
        }
        $index = 0;

        $chaperoneSheet = new GoogleSheetService('projectteam!C25:D28');
        $chaperoneSheet->documentId = '12U_Y4cJ4ZbbpQd1BWmR0eml3hfBWvqsRM7NLMtWxopg';
        $arrayChaperone = $chaperoneSheet->readSheet();
        $dataChaperone = $arrayChaperone->values;
        foreach($dataChaperone as $item){
            $dataChaperone[$index][1] = User::whereIn('name', explode(',', $item[1]))
                              ->select('name', 'email', 'profile')
                              ->get()
                              ->toArray(); 
            $index++;
        }

        $data = [
            'team' => $dataTeam,
            'creative' => $dataCreative,
            'chaperone' => $dataChaperone
        ];
        return response()->json($data);
    }

    public function createProjectTeam(Request $request){

        //Check Valid Link
        $url = $request->link;

        $regex = '/^https:\/\/docs.google.com\/spreadsheets\/d\/([a-zA-Z0-9-_]+)/';

        if (!preg_match($regex, $url, $matches)) {
            return response()->json([
                'error' => 'Invalid Url! Pls input a valid spreadsheet link'
            ], 400);
        } 
        $spreadsheetId = $matches[1];

        //Check Valid Template
        $templateValidate = new GoogleSheetService('project!A1:B2');
        $templateValidate->documentId = $spreadsheetId;
        if( !$templateValidate->checkSheetExist($request->type) || !$templateValidate->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->type." )"
            ],400);
        }

        //Title Value
        $title[0] = $request->title;
        $titleSheet = new GoogleSheetService('projectteam!C4:C4');
        $titleSheet->documentId = $spreadsheetId;
        $titleSheet->writeSheet($title);
        //Service Manager Value
        $serviceManager[0] = implode(',',$request->service_manager);
        $serviceManagerSheet = new GoogleSheetService('projectteam!C5:C5');
        $serviceManagerSheet->documentId = $spreadsheetId;
        $serviceManagerSheet->writeSheet($serviceManager);
        //Office Manager Value
        $officeManager[0] = implode(',',$request->office_manager);
        $officeManagerSheet = new GoogleSheetService('projectteam!C6:C6');
        $officeManagerSheet->documentId = $spreadsheetId;
        $officeManagerSheet->writeSheet($officeManager);
        //Product Manager Value
        $productManager[0] = implode(',',$request->product_manager);
        $productManagerSheet = new GoogleSheetService('projectteam!C7:C7');
        $productManagerSheet->documentId = $spreadsheetId;
        $productManagerSheet->writeSheet($productManager);
        //Senior Value
        $senior[0] = implode(',',$request->senior);
        $seniorSheet = new GoogleSheetService('projectteam!C8:C8');
        $seniorSheet->documentId = $spreadsheetId;
        $seniorSheet->writeSheet($senior);

        //Game Designer Junior
        $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
        $gameDesignerJuniorSheet = new GoogleSheetService('projectteam!D9:D9');
        $gameDesignerJuniorSheet->documentId = $spreadsheetId;
        $gameDesignerJuniorSheet->writeSheet($gameDesignerJunior);
        //Game Designer Medior
        $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
        $gameDesignerMediorSheet = new GoogleSheetService('projectteam!D10:D10');
        $gameDesignerMediorSheet->documentId = $spreadsheetId;
        $gameDesignerMediorSheet->writeSheet($gameDesignerMedior);
        //Game Designer Senior
        $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
        $gameDesignerSeniorSheet = new GoogleSheetService('projectteam!D11:D11');
        $gameDesignerSeniorSheet->documentId = $spreadsheetId;
        $gameDesignerSeniorSheet->writeSheet($gameDesignerSenior);
        //Experience Junior
        $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
        $experienceDesignerJuniorSheet = new GoogleSheetService('projectteam!D12:12');
        $experienceDesignerJuniorSheet->documentId = $spreadsheetId;
        $experienceDesignerJuniorSheet->writeSheet($experienceDesignerJunior);
        //Experience Medior
        $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
        $experienceDesignerMediorSheet = new GoogleSheetService('projectteam!D13:D13');
        $experienceDesignerMediorSheet->documentId = $spreadsheetId;
        $experienceDesignerMediorSheet->writeSheet($experienceDesignerMedior);
        //Experience Senior
        $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
        $experienceDesignerSeniorSheet = new GoogleSheetService('projectteam!D14:D14');
        $experienceDesignerSeniorSheet->documentId = $spreadsheetId;
        $experienceDesignerSeniorSheet->writeSheet($experienceDesignerSenior);
        // //UI UX
        $Ui_Ux[0] = implode(',',$request->ui_ux);
        $Ui_UxSheet = new GoogleSheetService('projectteam!D15:D15');
        $Ui_UxSheet->documentId = $spreadsheetId;
        $Ui_UxSheet->writeSheet($Ui_Ux);
        //Productontwerp junior
        $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
        $productOntWerpJuniorSheet = new GoogleSheetService('projectteam!D16:D16');
        $productOntWerpJuniorSheet->documentId = $spreadsheetId;
        $productOntWerpJuniorSheet->writeSheet($productOntWerpJunior);
        //Productontwerp medior
        $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
        $productOntWerpMediorSheet = new GoogleSheetService('projectteam!D17:D17');
        $productOntWerpMediorSheet->documentId = $spreadsheetId;
        $productOntWerpMediorSheet->writeSheet($productOntWerpMedior);
        //Productontwerp Senior
        $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
        $productOntWerpSeniorSheet = new GoogleSheetService('projectteam!D18:D18');
        $productOntWerpSeniorSheet->documentId = $spreadsheetId;
        $productOntWerpSeniorSheet->writeSheet($productOntWerpSenior);
        //Programmer junior
        $programmerJunior[0] = implode(',',$request->programmer_junior);
        $programmerJuniorSheet = new GoogleSheetService('projectteam!D19:D19');
        $programmerJuniorSheet->documentId = $spreadsheetId;
        $programmerJuniorSheet->writeSheet($programmerJunior);
        //Programmer medior
        $programmerMedior[0] = implode(',',$request->programmer_medior);
        $programmerMediorSheet = new GoogleSheetService('projectteam!D20:D20');
        $programmerMediorSheet->documentId = $spreadsheetId;
        $programmerMediorSheet->writeSheet($programmerMedior);
        //Programmer Senior
        $programmerSenior[0] = implode(',',$request->programmer_senior);
        $programmerSeniorSheet = new GoogleSheetService('projectteam!D21:D21');
        $programmerSeniorSheet->documentId = $spreadsheetId;
        $programmerSeniorSheet->writeSheet($programmerSenior);
        //Story junior
        $storyJunior[0] = implode(',',$request->story_junior);
        $storyJuniorSheet = new GoogleSheetService('projectteam!D22:D22');
        $storyJuniorSheet->documentId = $spreadsheetId;
        $storyJuniorSheet->writeSheet($storyJunior);
        //Story medior
        $storyMedior[0] = implode(',',$request->story_medior);
        $storyMediorSheet = new GoogleSheetService('projectteam!D23:D23');
        $storyMediorSheet->documentId = $spreadsheetId;
        $storyMediorSheet->writeSheet($storyMedior);
        //Story Senior
        $storySenior[0] = implode(',',$request->story_senior);
        $storySeniorSheet = new GoogleSheetService('projectteam!D24:D24');
        $storySeniorSheet->documentId = $spreadsheetId;
        $storySeniorSheet->writeSheet($storySenior);
        //Host
        $host[0] = implode(',',$request->host);
        $hostSheet = new GoogleSheetService('projectteam!D25:D25');
        $hostSheet->documentId = $spreadsheetId;
        $hostSheet->writeSheet($host);
        //Techniek
        $teckniek[0] = implode(',',$request->techniek);
        $teckniekSheet = new GoogleSheetService('projectteam!D26:D26');
        $teckniekSheet->documentId = $spreadsheetId;
        $teckniekSheet->writeSheet($teckniek);
        //Muziek
        $muziek[0] = implode(',',$request->muziek);
        $muziekSheet = new GoogleSheetService('projectteam!D27:D27');
        $muziekSheet->documentId = $spreadsheetId;
        $muziekSheet->writeSheet($muziek);
        //Props
        $props[0] = implode(',',$request->props);
        $propsSheet = new GoogleSheetService('projectteam!D28:D28');
        $propsSheet->documentId = $spreadsheetId;
        $propsSheet->writeSheet($props);

        Project::create([
            'name' => $request->title,
            'link' => $request->link,
            'size' => $request->type,
            'sheetId' => $spreadsheetId,
        ]);       

        return response()->json(['message' => 'success']);
    }
    public function updateProjectTeam(Request $request){

        //Check Valid Link
        $url = $request->link;

        $regex = '/^https:\/\/docs.google.com\/spreadsheets\/d\/([a-zA-Z0-9-_]+)/';

        if (!preg_match($regex, $url, $matches)) {
            return response()->json([
                'error' => 'Invalid Url! Pls input a valid spreadsheet link'
            ], 400);
        } 
        $spreadsheetId = $matches[1];

        //Check Valid Template
        $templateValidate = new GoogleSheetService('project!A1:B2');
        $templateValidate->documentId = $spreadsheetId;
        if( !$templateValidate->checkSheetExist($request->type) || !$templateValidate->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->type." )"
            ],400);
        }

        //Title Value
        $title[0] = $request->title;
        $titleSheet = new GoogleSheetService('projectteam!C4:C4');
        $titleSheet->documentId = $spreadsheetId;
        $titleSheet->writeSheet($title);
        //Service Manager Value
        $serviceManager[0] = implode(',',$request->service_manager);
        $serviceManagerSheet = new GoogleSheetService('projectteam!C5:C5');
        $serviceManagerSheet->documentId = $spreadsheetId;
        $serviceManagerSheet->writeSheet($serviceManager);
        //Office Manager Value
        $officeManager[0] = implode(',',$request->office_manager);
        $officeManagerSheet = new GoogleSheetService('projectteam!C6:C6');
        $officeManagerSheet->documentId = $spreadsheetId;
        $officeManagerSheet->writeSheet($officeManager);
        //Product Manager Value
        $productManager[0] = implode(',',$request->product_manager);
        $productManagerSheet = new GoogleSheetService('projectteam!C7:C7');
        $productManagerSheet->documentId = $spreadsheetId;
        $productManagerSheet->writeSheet($productManager);
        //Senior Value
        $senior[0] = implode(',',$request->senior);
        $seniorSheet = new GoogleSheetService('projectteam!C8:C8');
        $seniorSheet->documentId = $spreadsheetId;
        $seniorSheet->writeSheet($senior);

        //Game Designer Junior
        $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
        $gameDesignerJuniorSheet = new GoogleSheetService('projectteam!D9:D9');
        $gameDesignerJuniorSheet->documentId = $spreadsheetId;
        $gameDesignerJuniorSheet->writeSheet($gameDesignerJunior);
        //Game Designer Medior
        $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
        $gameDesignerMediorSheet = new GoogleSheetService('projectteam!D10:D10');
        $gameDesignerMediorSheet->documentId = $spreadsheetId;
        $gameDesignerMediorSheet->writeSheet($gameDesignerMedior);
        //Game Designer Senior
        $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
        $gameDesignerSeniorSheet = new GoogleSheetService('projectteam!D11:D11');
        $gameDesignerSeniorSheet->documentId = $spreadsheetId;
        $gameDesignerSeniorSheet->writeSheet($gameDesignerSenior);
        //Experience Junior
        $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
        $experienceDesignerJuniorSheet = new GoogleSheetService('projectteam!D12:12');
        $experienceDesignerJuniorSheet->documentId = $spreadsheetId;
        $experienceDesignerJuniorSheet->writeSheet($experienceDesignerJunior);
        //Experience Medior
        $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
        $experienceDesignerMediorSheet = new GoogleSheetService('projectteam!D13:D13');
        $experienceDesignerMediorSheet->documentId = $spreadsheetId;
        $experienceDesignerMediorSheet->writeSheet($experienceDesignerMedior);
        //Experience Senior
        $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
        $experienceDesignerSeniorSheet = new GoogleSheetService('projectteam!D14:D14');
        $experienceDesignerSeniorSheet->documentId = $spreadsheetId;
        $experienceDesignerSeniorSheet->writeSheet($experienceDesignerSenior);
        // //UI UX
        $Ui_Ux[0] = implode(',',$request->ui_ux);
        $Ui_UxSheet = new GoogleSheetService('projectteam!D15:D15');
        $Ui_UxSheet->documentId = $spreadsheetId;
        $Ui_UxSheet->writeSheet($Ui_Ux);
        //Productontwerp junior
        $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
        $productOntWerpJuniorSheet = new GoogleSheetService('projectteam!D16:D16');
        $productOntWerpJuniorSheet->documentId = $spreadsheetId;
        $productOntWerpJuniorSheet->writeSheet($productOntWerpJunior);
        //Productontwerp medior
        $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
        $productOntWerpMediorSheet = new GoogleSheetService('projectteam!D17:D17');
        $productOntWerpMediorSheet->documentId = $spreadsheetId;
        $productOntWerpMediorSheet->writeSheet($productOntWerpMedior);
        //Productontwerp Senior
        $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
        $productOntWerpSeniorSheet = new GoogleSheetService('projectteam!D18:D18');
        $productOntWerpSeniorSheet->documentId = $spreadsheetId;
        $productOntWerpSeniorSheet->writeSheet($productOntWerpSenior);
        //Programmer junior
        $programmerJunior[0] = implode(',',$request->programmer_junior);
        $programmerJuniorSheet = new GoogleSheetService('projectteam!D19:D19');
        $programmerJuniorSheet->documentId = $spreadsheetId;
        $programmerJuniorSheet->writeSheet($programmerJunior);
        //Programmer medior
        $programmerMedior[0] = implode(',',$request->programmer_medior);
        $programmerMediorSheet = new GoogleSheetService('projectteam!D20:D20');
        $programmerMediorSheet->documentId = $spreadsheetId;
        $programmerMediorSheet->writeSheet($programmerMedior);
        //Programmer Senior
        $programmerSenior[0] = implode(',',$request->programmer_senior);
        $programmerSeniorSheet = new GoogleSheetService('projectteam!D21:D21');
        $programmerSeniorSheet->documentId = $spreadsheetId;
        $programmerSeniorSheet->writeSheet($programmerSenior);
        //Story junior
        $storyJunior[0] = implode(',',$request->story_junior);
        $storyJuniorSheet = new GoogleSheetService('projectteam!D22:D22');
        $storyJuniorSheet->documentId = $spreadsheetId;
        $storyJuniorSheet->writeSheet($storyJunior);
        //Story medior
        $storyMedior[0] = implode(',',$request->story_medior);
        $storyMediorSheet = new GoogleSheetService('projectteam!D23:D23');
        $storyMediorSheet->documentId = $spreadsheetId;
        $storyMediorSheet->writeSheet($storyMedior);
        //Story Senior
        $storySenior[0] = implode(',',$request->story_senior);
        $storySeniorSheet = new GoogleSheetService('projectteam!D24:D24');
        $storySeniorSheet->documentId = $spreadsheetId;
        $storySeniorSheet->writeSheet($storySenior);
        //Host
        $host[0] = implode(',',$request->host);
        $hostSheet = new GoogleSheetService('projectteam!D25:D25');
        $hostSheet->documentId = $spreadsheetId;
        $hostSheet->writeSheet($host);
        //Techniek
        $teckniek[0] = implode(',',$request->techniek);
        $teckniekSheet = new GoogleSheetService('projectteam!D26:D26');
        $teckniekSheet->documentId = $spreadsheetId;
        $teckniekSheet->writeSheet($teckniek);
        //Muziek
        $muziek[0] = implode(',',$request->muziek);
        $muziekSheet = new GoogleSheetService('projectteam!D27:D27');
        $muziekSheet->documentId = $spreadsheetId;
        $muziekSheet->writeSheet($muziek);
        //Props
        $props[0] = implode(',',$request->props);
        $propsSheet = new GoogleSheetService('projectteam!D28:D28');
        $propsSheet->documentId = $spreadsheetId;
        $propsSheet->writeSheet($props);

        Project::create([
            'name' => $request->title,
            'link' => $request->link,
            'size' => $request->type,
            'sheetId' => $spreadsheetId,
        ]);       

        return response()->json(['message' => 'success']);
    }

    public function mark(Request $request){
        $project = Project::findorfail($request->project_id);
        if($project->size === 'Small'){
            $range = 'Small!'.$request->coordinate;
        }else if($project->size == 'Medium'){
            $range = 'Medium!'.$request->coordinate;
        }else {
            $range = 'Large!'.$request->coordinate;
        }
        $sheet = new GoogleSheetService($range);
        $sheet->documentId = $project->sheetId;
        $data[0] = 'X';
        $sheet->writeSheet($data);

        return response()->json(['message' => 'success']);
    }

    public function task(Request $request){
        $project = Project::findorfail($request->project_id);
        $spreadSheetId = $project->sheetId;
        if($project->size === 'Small'){
            $data = [];
        }else if($project->size === 'Medium'){
            $startProject = [];
            $humanDesign = [];
            $brainStrom = [];
            $experienceDesign = [];
            $gameTrust = [];
            $wowDesign = [];
            $levering = [];
            $afsluiting = [];
            if(in_array('startProject',$request->filter)){
                $startProjectSheet = new GoogleSheetService('Medium!A5:B20');
                $startProjectSheet->documentId = $spreadSheetId;
                $startProject = $startProjectSheet->readSheet();
            }else if(in_array('humanDesign',$request->filter)){
                $humanDesignSheet = new GoogleSheetService('Medium!C5:D15');
                $humanDesignSheet->documentId = $spreadSheetId;
                $humanDesign = $humanDesignSheet->readSheet();
            }else if(in_array('brainStrom',$request->filter)){
                $brainStromSheet = new GoogleSheetService('Medium!E5:F13');
                $brainStromSheet->documentId = $spreadSheetId;
                $brainStrom = $brainStromSheet->readSheet();
            }else if(in_array('experienceDesign',$request->filter)){
                $experienceDesignSheet = new GoogleSheetService('Medium!G5:H12');
                $experienceDesignSheet->documentId = $spreadSheetId;
                $experienceDesign = $experienceDesignSheet->readSheet();
            }else if(in_array('gameTrust',$request->filter)){
                $gameTrustSheet = new GoogleSheetService('Medium!A23:B45');
                $gameTrustSheet->documentId = $spreadSheetId;
                $gameTrust = $gameTrustSheet->readSheet();
            }else if(in_array('wowDesign',$request->filter)){
                $wowDesignSheet = new GoogleSheetService('Medoum!C23:D45');
                $wowDesignSheet->documentId = $spreadSheetId;
                $wowDesign = $wowDesignSheet->readSheet();
            }else if(in_array('levering',$request->filter)){
                $leveringSheet = new GoogleSheetService('Medium!E23:F26');
                $leveringSheet->documentId = $spreadSheetId;
                $levering = $leveringSheet->readSheet();
            }else if(in_array('afsluiting',$request->filter)){
                $afsluitingSheet = new GoogleSheetService('Medium!G23:H28');
                $afsluitingSheet->documentId = $spreadSheetId;
                $afsluiting = $afsluitingSheet->readSheet();
            }
            $data = [
                'startProject' => $startProject,
                'humanDesign' => $humanDesign,
                'brainStrom' => $brainStrom,
                'experienceDesign' => $experienceDesign,
                'gameTrust' => $gameTrust,
                'wowDesign' => $wowDesign,
                'levering' => $levering,
                'afsluiting' => $afsluiting
            ];
        }else if($project->size === 'Large'){
            $data = [];
        }
        return response()->json($data);
    }
}
