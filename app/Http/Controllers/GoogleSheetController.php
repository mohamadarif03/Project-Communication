<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTeamRequest;
use App\Http\Services\GoogleSheetService;
use App\Models\Project;
use App\Models\ProjectMember;
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
        $teamSheet->documentId = $spreadSheetId;
        $arrayTeam = $teamSheet->readSheet();
        $dataTeam = $arrayTeam->values;
        $index = 0;
        foreach($dataTeam as $item){
            if( count($dataTeam[$index][1]) > 1){
                $dataTeam[$index][1] = User::whereIn('name', explode(',', $item[1]))
                                  ->select('name', 'email', 'profile')
                                  ->get()
                                  ->toArray(); 
            } 
            $index++;
        }
        $index = 0;
          
        $creativeSheet = new GoogleSheetService('projectteam!C9:D24');
        $creativeSheet->documentId = $spreadSheetId;
        $arrayCreative = $creativeSheet->readSheet();
        $dataCreative = $arrayCreative->values;
        foreach($dataCreative as $item){
            if( count($dataCreative[$index]) > 1 ){
                $dataCreative[$index][1] = User::whereIn('name', explode(',', $item[1]))
                                  ->select('name', 'email', 'profile')
                                  ->get()
                                  ->toArray(); 
            }
            $index++;
        }
        $index = 0;

        $chaperoneSheet = new GoogleSheetService('projectteam!C25:D28');
        $chaperoneSheet->documentId = $spreadSheetId;
        $arrayChaperone = $chaperoneSheet->readSheet();
        $dataChaperone = $arrayChaperone->values;
        foreach($dataChaperone as $item){
            if(count($dataChaperone[$index][1]) > 1){
                $dataChaperone[$index][1] = User::whereIn('name', explode(',', $item[1]))
                                  ->select('name', 'email', 'profile')
                                  ->get()
                                  ->toArray();               
            }
            $index++;
        }
        

             $data = [
            'team' => $dataTeam,
            'creative' => $dataCreative,
            'chaperone' => $dataChaperone
        ];
        return response()->json($data);
    }

    public function createProjectTeam(ProjectTeamRequest $request){

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
        if( !$templateValidate->checkSheetExist($request->size) || !$templateValidate->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->size." )"
            ],400);
        }

        //Project Name Value
        $projectName[0] = $request->project_name;
        $projectNameSheet = new GoogleSheetService('projectteam!C4:C4');
        $projectNameSheet->documentId = $spreadsheetId;
        $projectNameSheet->writeSheet($projectName);
        //Service Manager Value
        if($request->service_manager){
            $serviceManager[0] = implode(',',$request->service_manager);
            $serviceManagerSheet = new GoogleSheetService('projectteam!C5:C5');
            $serviceManagerSheet->documentId = $spreadsheetId;
            $serviceManagerSheet->writeSheet($serviceManager);
        }
        //Office Manager Value
        if($request->office_manager){
            $officeManager[0] = implode(',',$request->office_manager);
            $officeManagerSheet = new GoogleSheetService('projectteam!C6:C6');
            $officeManagerSheet->documentId = $spreadsheetId;
            $officeManagerSheet->writeSheet($officeManager);
        }
        //Product Manager Value
        if($request->product_manager){
            $productManager[0] = implode(',',$request->product_manager);
            $productManagerSheet = new GoogleSheetService('projectteam!C7:C7');
            $productManagerSheet->documentId = $spreadsheetId;
            $productManagerSheet->writeSheet($productManager);
        }
        //Senior Value
        if($request->senior){
            $senior[0] = implode(',',$request->senior);
            $seniorSheet = new GoogleSheetService('projectteam!C8:C8');
            $seniorSheet->documentId = $spreadsheetId;
            $seniorSheet->writeSheet($senior);
        }

        //Game Designer Junior
        if($request->gamedesigner_junior){
            $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
            $gameDesignerJuniorSheet = new GoogleSheetService('projectteam!D9:D9');
            $gameDesignerJuniorSheet->documentId = $spreadsheetId;
            $gameDesignerJuniorSheet->writeSheet($gameDesignerJunior);
        }
        //Game Designer Medior
        if($request->gamedesigner_medior){
            $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
            $gameDesignerMediorSheet = new GoogleSheetService('projectteam!D10:D10');
            $gameDesignerMediorSheet->documentId = $spreadsheetId;
            $gameDesignerMediorSheet->writeSheet($gameDesignerMedior);
        }
        //Game Designer Senior
        if($request->gamedesigner_senior){
            $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
            $gameDesignerSeniorSheet = new GoogleSheetService('projectteam!D11:D11');
            $gameDesignerSeniorSheet->documentId = $spreadsheetId;
            $gameDesignerSeniorSheet->writeSheet($gameDesignerSenior);
        }
        //Experience Junior
        if($request->experience_junior){
            $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
            $experienceDesignerJuniorSheet = new GoogleSheetService('projectteam!D12:12');
            $experienceDesignerJuniorSheet->documentId = $spreadsheetId;
            $experienceDesignerJuniorSheet->writeSheet($experienceDesignerJunior);
        }
        //Experience Medior
        if($request->experience_medior){
            $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
            $experienceDesignerMediorSheet = new GoogleSheetService('projectteam!D13:D13');
            $experienceDesignerMediorSheet->documentId = $spreadsheetId;
            $experienceDesignerMediorSheet->writeSheet($experienceDesignerMedior);
        }
        //Experience Senior
        if($request->experience_senior){
            $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
            $experienceDesignerSeniorSheet = new GoogleSheetService('projectteam!D14:D14');
            $experienceDesignerSeniorSheet->documentId = $spreadsheetId;
            $experienceDesignerSeniorSheet->writeSheet($experienceDesignerSenior);
        }
        // //UI UX
        if($request->ui_ux){
            $Ui_Ux[0] = implode(',',$request->ui_ux);
            $Ui_UxSheet = new GoogleSheetService('projectteam!D15:D15');
            $Ui_UxSheet->documentId = $spreadsheetId;
            $Ui_UxSheet->writeSheet($Ui_Ux);
        }
        //Productontwerp junior
        if($request->productontwerp_junior){
            $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
            $productOntWerpJuniorSheet = new GoogleSheetService('projectteam!D16:D16');
            $productOntWerpJuniorSheet->documentId = $spreadsheetId;
            $productOntWerpJuniorSheet->writeSheet($productOntWerpJunior);
        }
        //Productontwerp medior
        if($request->productontwerp_medior){
            $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
            $productOntWerpMediorSheet = new GoogleSheetService('projectteam!D17:D17');
            $productOntWerpMediorSheet->documentId = $spreadsheetId;
            $productOntWerpMediorSheet->writeSheet($productOntWerpMedior);
        }
        //Productontwerp Senior
        if($request->productontwerp_senior){
            $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
            $productOntWerpSeniorSheet = new GoogleSheetService('projectteam!D18:D18');
            $productOntWerpSeniorSheet->documentId = $spreadsheetId;
            $productOntWerpSeniorSheet->writeSheet($productOntWerpSenior);
        }
        //Programmer junior
        if($request->programmer_junior){
            $programmerJunior[0] = implode(',',$request->programmer_junior);
            $programmerJuniorSheet = new GoogleSheetService('projectteam!D19:D19');
            $programmerJuniorSheet->documentId = $spreadsheetId;
            $programmerJuniorSheet->writeSheet($programmerJunior);
        }
        //Programmer medior
        if($request->programmer_medior){
            $programmerMedior[0] = implode(',',$request->programmer_medior);
            $programmerMediorSheet = new GoogleSheetService('projectteam!D20:D20');
            $programmerMediorSheet->documentId = $spreadsheetId;
            $programmerMediorSheet->writeSheet($programmerMedior);
        }
        //Programmer Senior
        if($request->programmer_senior){
            $programmerSenior[0] = implode(',',$request->programmer_senior);
            $programmerSeniorSheet = new GoogleSheetService('projectteam!D21:D21');
            $programmerSeniorSheet->documentId = $spreadsheetId;
            $programmerSeniorSheet->writeSheet($programmerSenior);
        }
        //Story junior
        if($request->story_junior){
            $storyJunior[0] = implode(',',$request->story_junior);
            $storyJuniorSheet = new GoogleSheetService('projectteam!D22:D22');
            $storyJuniorSheet->documentId = $spreadsheetId;
            $storyJuniorSheet->writeSheet($storyJunior);
        }
        //Story medior
        if($request->story_medior){
            $storyMedior[0] = implode(',',$request->story_medior);
            $storyMediorSheet = new GoogleSheetService('projectteam!D23:D23');
            $storyMediorSheet->documentId = $spreadsheetId;
            $storyMediorSheet->writeSheet($storyMedior);
        }
        //Story Senior
        if($request->story_senior){
            $storySenior[0] = implode(',',$request->story_senior);
            $storySeniorSheet = new GoogleSheetService('projectteam!D24:D24');
            $storySeniorSheet->documentId = $spreadsheetId;
            $storySeniorSheet->writeSheet($storySenior);
        }
        //Host
        if($request->host){
            $host[0] = implode(',',$request->host);
            $hostSheet = new GoogleSheetService('projectteam!D25:D25');
            $hostSheet->documentId = $spreadsheetId;
            $hostSheet->writeSheet($host);
        }
        //Techniek
        if($request->techniek){
            $teckniek[0] = implode(',',$request->techniek);
            $teckniekSheet = new GoogleSheetService('projectteam!D26:D26');
            $teckniekSheet->documentId = $spreadsheetId;
            $teckniekSheet->writeSheet($teckniek);
        }
        //Muziek
        if($request->muziek){
            $muziek[0] = implode(',',$request->muziek);
            $muziekSheet = new GoogleSheetService('projectteam!D27:D27');
            $muziekSheet->documentId = $spreadsheetId;
            $muziekSheet->writeSheet($muziek);
        }
        //Props
        if($request->props){
            $props[0] = implode(',',$request->props);
            $propsSheet = new GoogleSheetService('projectteam!D28:D28');
            $propsSheet->documentId = $spreadsheetId;
            $propsSheet->writeSheet($props);
        }

        $project = Project::create([
            'name' => $request->project_name,
            'link' => $request->link,
            'size' => $request->size,
            'sheetId' => $spreadsheetId,
        ]);
        
        $members = collect($request->service_manager)
                ->merge($request->office_manager)
                ->merge($request->product_manager)
                ->merge($request->senior)
                ->merge($request->gamedesigner_junior)
                ->merge($request->gamedesigner_medior)
                ->merge($request->gamedesigner_senior)
                ->merge($request->experienceDesigner_junior)
                ->merge($request->experienceDesigner_medior)
                ->merge($request->experienceDesigner_senior)
                ->merge($request->ui_ux)
                ->merge($request->productontwerp_junior)
                ->merge($request->productontwerp_medior)
                ->merge($request->productontwerp_senior)
                ->merge($request->programmer_junior)
                ->merge($request->programmer_medior)
                ->merge($request->programmer_senior)
                ->merge($request->story_junior)
                ->merge($request->story_medior)
                ->merge($request->story_senior)
                ->merge($request->host)
                ->merge($request->muziek)
                ->merge($request->techniek)
                ->merge($request->props)
                ->unique();
        foreach($members as $member){
            $user = user::where('name',$member)->first();
            ProjectMember::create([
                'project_id' => $project->id,
                'user_id' => $user->id
            ]);
        }
        return response()->json(['message' => 'success']);
    }
    public function updateProjectTeam(ProjectTeamRequest $request,$id){

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
        if( !$templateValidate->checkSheetExist($request->size) || !$templateValidate->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->type." )"
            ],400);
        }

        //Project Name Value
        $projectName[0] = $request->project_name;
        $projectNameSheet = new GoogleSheetService('projectteam!C4:C4');
        $projectNameSheet->documentId = $spreadsheetId;
        $projectNameSheet->writeSheet($projectName);
        //Service Manager Value
        if($request->service_manager){
            $serviceManager[0] = implode(',',$request->service_manager);
            $serviceManagerSheet = new GoogleSheetService('projectteam!C5:C5');
            $serviceManagerSheet->documentId = $spreadsheetId;
            $serviceManagerSheet->writeSheet($serviceManager);
        }
        //Office Manager Value
        if($request->office_manager){
            $officeManager[0] = implode(',',$request->office_manager);
            $officeManagerSheet = new GoogleSheetService('projectteam!C6:C6');
            $officeManagerSheet->documentId = $spreadsheetId;
            $officeManagerSheet->writeSheet($officeManager);
        }
        //Product Manager Value
        if($request->product_manager){
            $productManager[0] = implode(',',$request->product_manager);
            $productManagerSheet = new GoogleSheetService('projectteam!C7:C7');
            $productManagerSheet->documentId = $spreadsheetId;
            $productManagerSheet->writeSheet($productManager);
        }
        //Senior Value
        if($request->senior){
            $senior[0] = implode(',',$request->senior);
            $seniorSheet = new GoogleSheetService('projectteam!C8:C8');
            $seniorSheet->documentId = $spreadsheetId;
            $seniorSheet->writeSheet($senior);
        }
        //Game Designer Junior
        if($request->gamedesigner_junior){
            $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
            $gameDesignerJuniorSheet = new GoogleSheetService('projectteam!D9:D9');
            $gameDesignerJuniorSheet->documentId = $spreadsheetId;
            $gameDesignerJuniorSheet->writeSheet($gameDesignerJunior);
        }
        //Game Designer Medior
        if($request->gamedesigner_medior){
            $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
            $gameDesignerMediorSheet = new GoogleSheetService('projectteam!D10:D10');
            $gameDesignerMediorSheet->documentId = $spreadsheetId;
            $gameDesignerMediorSheet->writeSheet($gameDesignerMedior);
        }
        //Game Designer Senior
        if($request->gamedesigner_senior){
            $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
            $gameDesignerSeniorSheet = new GoogleSheetService('projectteam!D11:D11');
            $gameDesignerSeniorSheet->documentId = $spreadsheetId;
            $gameDesignerSeniorSheet->writeSheet($gameDesignerSenior);
        }
        //Experience Junior
        if($request->experience_junior){
            $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
            $experienceDesignerJuniorSheet = new GoogleSheetService('projectteam!D12:12');
            $experienceDesignerJuniorSheet->documentId = $spreadsheetId;
            $experienceDesignerJuniorSheet->writeSheet($experienceDesignerJunior);
        }
        //Experience Medior
        if($request->experience_medior){
            $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
            $experienceDesignerMediorSheet = new GoogleSheetService('projectteam!D13:D13');
            $experienceDesignerMediorSheet->documentId = $spreadsheetId;
            $experienceDesignerMediorSheet->writeSheet($experienceDesignerMedior);
        }
        //Experience Senior
        if($request->experience_senior){
            $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
            $experienceDesignerSeniorSheet = new GoogleSheetService('projectteam!D14:D14');
            $experienceDesignerSeniorSheet->documentId = $spreadsheetId;
            $experienceDesignerSeniorSheet->writeSheet($experienceDesignerSenior);
        }
        // //UI UX
        if($request->ui_ux){
            $Ui_Ux[0] = implode(',',$request->ui_ux);
            $Ui_UxSheet = new GoogleSheetService('projectteam!D15:D15');
            $Ui_UxSheet->documentId = $spreadsheetId;
            $Ui_UxSheet->writeSheet($Ui_Ux);
        }
        //Productontwerp junior
        if($request->productontwerp_junior){
            $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
            $productOntWerpJuniorSheet = new GoogleSheetService('projectteam!D16:D16');
            $productOntWerpJuniorSheet->documentId = $spreadsheetId;
            $productOntWerpJuniorSheet->writeSheet($productOntWerpJunior);
        }
        //Productontwerp medior
        if($request->productontwerp_medior){
            $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
            $productOntWerpMediorSheet = new GoogleSheetService('projectteam!D17:D17');
            $productOntWerpMediorSheet->documentId = $spreadsheetId;
            $productOntWerpMediorSheet->writeSheet($productOntWerpMedior);
        }
        //Productontwerp Senior
        if($request->productontwerp_senior){
            $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
            $productOntWerpSeniorSheet = new GoogleSheetService('projectteam!D18:D18');
            $productOntWerpSeniorSheet->documentId = $spreadsheetId;
            $productOntWerpSeniorSheet->writeSheet($productOntWerpSenior);
        }
        //Programmer junior
        if($request->programmer_junior){
            $programmerJunior[0] = implode(',',$request->programmer_junior);
            $programmerJuniorSheet = new GoogleSheetService('projectteam!D19:D19');
            $programmerJuniorSheet->documentId = $spreadsheetId;
            $programmerJuniorSheet->writeSheet($programmerJunior);
        }
        //Programmer medior
        if($request->programmer_medior){
            $programmerMedior[0] = implode(',',$request->programmer_medior);
            $programmerMediorSheet = new GoogleSheetService('projectteam!D20:D20');
            $programmerMediorSheet->documentId = $spreadsheetId;
            $programmerMediorSheet->writeSheet($programmerMedior);
        }
        //Programmer Senior
        if($request->programmer_senior){
            $programmerSenior[0] = implode(',',$request->programmer_senior);
            $programmerSeniorSheet = new GoogleSheetService('projectteam!D21:D21');
            $programmerSeniorSheet->documentId = $spreadsheetId;
            $programmerSeniorSheet->writeSheet($programmerSenior);
        }
        //Story junior
        if($request->story_junior){
            $storyJunior[0] = implode(',',$request->story_junior);
            $storyJuniorSheet = new GoogleSheetService('projectteam!D22:D22');
            $storyJuniorSheet->documentId = $spreadsheetId;
            $storyJuniorSheet->writeSheet($storyJunior);
        }
        //Story medior
        if($request->story_medior){
            $storyMedior[0] = implode(',',$request->story_medior);
            $storyMediorSheet = new GoogleSheetService('projectteam!D23:D23');
            $storyMediorSheet->documentId = $spreadsheetId;
            $storyMediorSheet->writeSheet($storyMedior);
        }
        //Story Senior
        if($request->story_senior){
            $storySenior[0] = implode(',',$request->story_senior);
            $storySeniorSheet = new GoogleSheetService('projectteam!D24:D24');
            $storySeniorSheet->documentId = $spreadsheetId;
            $storySeniorSheet->writeSheet($storySenior);
        }
        //Host
        if($request->host){
            $host[0] = implode(',',$request->host);
            $hostSheet = new GoogleSheetService('projectteam!D25:D25');
            $hostSheet->documentId = $spreadsheetId;
            $hostSheet->writeSheet($host);
        }
        //Techniek
        if($request->techniek){
            $teckniek[0] = implode(',',$request->techniek);
            $teckniekSheet = new GoogleSheetService('projectteam!D26:D26');
            $teckniekSheet->documentId = $spreadsheetId;
            $teckniekSheet->writeSheet($teckniek);
        }
        //Muziek
        if($request->muziek){
            $muziek[0] = implode(',',$request->muziek);
            $muziekSheet = new GoogleSheetService('projectteam!D27:D27');
            $muziekSheet->documentId = $spreadsheetId;
            $muziekSheet->writeSheet($muziek);
        }
        //Props
        if($request->props){
            $props[0] = implode(',',$request->props);
            $propsSheet = new GoogleSheetService('projectteam!D28:D28');
            $propsSheet->documentId = $spreadsheetId;
            $propsSheet->writeSheet($props);
        }

        $project = Project::findorfail($id)->update([
            'name' => $request->project_name,
            'link' => $request->link,
            'size' => $request->size,
            'sheetId' => $spreadsheetId,
        ]);
        
        ProjectMember::where('project_id',$id)->delete();

        $members = collect($request->service_manager)
                ->merge($request->office_manager)
                ->merge($request->product_manager)
                ->merge($request->senior)
                ->merge($request->gamedesigner_junior)
                ->merge($request->gamedesigner_medior)
                ->merge($request->gamedesigner_senior)
                ->merge($request->experienceDesigner_junior)
                ->merge($request->experienceDesigner_medior)
                ->merge($request->experienceDesigner_senior)
                ->merge($request->ui_ux)
                ->merge($request->productontwerp_junior)
                ->merge($request->productontwerp_medior)
                ->merge($request->productontwerp_senior)
                ->merge($request->programmer_junior)
                ->merge($request->programmer_medior)
                ->merge($request->programmer_senior)
                ->merge($request->story_junior)
                ->merge($request->story_medior)
                ->merge($request->story_senior)
                ->merge($request->host)
                ->merge($request->muziek)
                ->merge($request->techniek)
                ->merge($request->props)
                ->unique();
        foreach($members as $member){
            $user = user::where('name',$member)->first();
            ProjectMember::create([
                'project_id' => $id,
                'user_id' => $user->id
            ]);
        }

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
            $startProject = [];
            $brainStrom = [];
            $experienceDesign = [];
            $gameTrust = [];
            $experienceImpact = [];
            $afsluiting  = [];
            if(in_array('startProject',$request->filter)){
                $startProjectSheet = new GoogleSheetService('Small!A5:B18');
                $startProjectSheet->documentId = $spreadSheetId;
                $startProject = $startProjectSheet->readSheet();
            }
            if(in_array('brainStrom',$request->filter)){
                $brainStromSheet = new GoogleSheetService('Small!C5:D12');
                $brainStromSheet->documentId = $spreadSheetId;
                $brainStrom = $brainStromSheet->readSheet();
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesignSheet = new GoogleSheetService('Small!E5:F9');
                $experienceDesignSheet->documentId = $spreadSheetId;
                $experienceDesign = $experienceDesignSheet->readSheet();
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrustSheet = new GoogleSheetService('Small!A22:B47');
                $gameTrustSheet->documentId = $spreadSheetId;
                $gameTrust = $gameTrustSheet->readSheet();
            }
            if(in_array('experienceImpact',$request->filter)){
                $experienceImpactSheet = new GoogleSheetService('Small!C22:D25');
                $experienceImpactSheet->documentId = $spreadSheetId;
                $experienceImpact = $experienceImpactSheet->readSheet();
            }
            if(in_array('afsluiting',$request->filter)){
                $afsluitingSheet = new GoogleSheetService('Small!C22:D26');
                $afsluitingSheet->documentId = $spreadSheetId;
                $afsluiting = $afsluitingSheet->readSheet();
            }
            $data = [
                'startProject' => $startProject,
                'brainStrom' => $brainStrom,
                'experienceDesign' => $experienceDesign,
                'gameTrust' => $gameTrust,
                'impact' => $experienceImpact,
                'afsluiting' => $afsluiting
            ];
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
            }
            if(in_array('humanDesign',$request->filter)){
                $humanDesignSheet = new GoogleSheetService('Medium!C5:D15');
                $humanDesignSheet->documentId = $spreadSheetId;
                $humanDesign = $humanDesignSheet->readSheet();
            }
            if(in_array('brainStrom',$request->filter)){
                $brainStromSheet = new GoogleSheetService('Medium!E5:F13');
                $brainStromSheet->documentId = $spreadSheetId;
                $brainStrom = $brainStromSheet->readSheet();
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesignSheet = new GoogleSheetService('Medium!G5:H12');
                $experienceDesignSheet->documentId = $spreadSheetId;
                $experienceDesign = $experienceDesignSheet->readSheet();
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrustSheet = new GoogleSheetService('Medium!A23:B45');
                $gameTrustSheet->documentId = $spreadSheetId;
                $gameTrust = $gameTrustSheet->readSheet();
            }
            if(in_array('wowDesign',$request->filter)){
                $wowDesignSheet = new GoogleSheetService('Medoum!C23:D45');
                $wowDesignSheet->documentId = $spreadSheetId;
                $wowDesign = $wowDesignSheet->readSheet();
            }
            if(in_array('levering',$request->filter)){
                $leveringSheet = new GoogleSheetService('Medium!E23:F26');
                $leveringSheet->documentId = $spreadSheetId;
                $levering = $leveringSheet->readSheet();
            }
            if(in_array('afsluiting',$request->filter)){
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
            $startProject = [];
            $humanDesign = [];
            $concepting = [];
            $experienceDesign = [];
            $gameTrust = [];
            $wowDesign = [];
            $impactDesign = [];
            $afsluiting = [];
            if(in_array('startProject',$request->filter)){
                $startProjectSheet = new GoogleSheetService('Large!A5:B20');
                $startProjectSheet->documentId = $spreadSheetId;
                $startProject = $startProjectSheet->readSheet();
            }
            if(in_array('humanDesign',$request->filter)){
                $humanDesignSheet = new GoogleSheetService('Large!C5:D15');
                $humanDesignSheet->documentId = $spreadSheetId;
                $humanDesign = $humanDesignSheet->readSheet();
            }
            if(in_array('concepting',$request->filter)){
                $brainStromSheet = new GoogleSheetService('Large!E5:F13');
                $brainStromSheet->documentId = $spreadSheetId;
                $brainStrom = $brainStromSheet->readSheet();
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesignSheet = new GoogleSheetService('Large!G5:H12');
                $experienceDesignSheet->documentId = $spreadSheetId;
                $experienceDesign = $experienceDesignSheet->readSheet();
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrustSheet = new GoogleSheetService('Large!A23:B45');
                $gameTrustSheet->documentId = $spreadSheetId;
                $gameTrust = $gameTrustSheet->readSheet();
            }
            if(in_array('wowDesign',$request->filter)){
                $wowDesignSheet = new GoogleSheetService('Large!C23:D45');
                $wowDesignSheet->documentId = $spreadSheetId;
                $wowDesign = $wowDesignSheet->readSheet();
            }
            if(in_array('impactDesign',$request->filter)){
                $impactDesignSheet = new GoogleSheetService('Large!E23:F26');
                $impactDesignSheet->documentId = $spreadSheetId;
                $impactDesign = $impactDesignSheet->readSheet();
            }
            if(in_array('afsluiting',$request->filter)){
                $afsluitingSheet = new GoogleSheetService('Large!G23:H28');
                $afsluitingSheet->documentId = $spreadSheetId;
                $afsluiting = $afsluitingSheet->readSheet();
            }
            $data = [
                'startProject' => $startProject,
                'humanDesign' => $humanDesign,
                'concepting' => $concepting,
                'experienceDesign' => $experienceDesign,
                'gameTrust' => $gameTrust,
                'wowDesign' => $wowDesign,
                'impact' => $impactDesign,
                'afsluiting' => $afsluiting
            ];
        }
        return response()->json($data);
    }
}
