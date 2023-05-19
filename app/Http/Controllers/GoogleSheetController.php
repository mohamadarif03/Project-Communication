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
    public function team(Request $request){
        $spreadSheetId = $request->id;
        $Sheet = new GoogleSheetService($spreadSheetId);
        $arrayTeam = $Sheet->readSheet('projectteam!B5:C8');
        $dataTeam = $arrayTeam->values;
        $index = 0;
        foreach($dataTeam as $item){
            if( count($dataTeam[$index]) > 1){
                $dataTeam[$index][1] = User::whereIn('name', explode(',', $item[1]))
                                  ->select('name', 'email', 'profile')
                                  ->get()
                                  ->toArray(); 
            } 
            $index++;
        }
        $index = 0;
        $arrayCreative = $Sheet->readSheet('projectteam!C9:D24');
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
        $arrayChaperone = $Sheet->readSheet('projectteam!C25:D28');
        $dataChaperone = $arrayChaperone->values;
        foreach($dataChaperone as $item){
            if(count($dataChaperone[$index]) > 1){
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
        $Sheet = new GoogleSheetService($spreadsheetId);
        if( !$Sheet->checkSheetExist($request->size) || !$Sheet->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->size." )"
            ],400);
        }

        //Project Name Value
        $projectName[0] = $request->project_name;
        $Sheet->writeSheet($projectName,'projectteam!C4:C4');
        //Service Manager Value
        if($request->service_manager){
            $serviceManager[0] = implode(',',$request->service_manager);
            $Sheet->writeSheet($serviceManager,'projectteam!C5:C5');
        }
        //Office Manager Value
        if($request->office_manager){
            $officeManager[0] = implode(',',$request->office_manager);
            $Sheet->writeSheet($officeManager,'projectteam!C6:C6');
        }
        //Product Manager Value
        if($request->product_manager){
            $productManager[0] = implode(',',$request->product_manager);
            $Sheet->writeSheet($productManager,'projectteam!C7:C7');
        }
        //Senior Value
        if($request->senior){
            $senior[0] = implode(',',$request->senior);
            $Sheet->writeSheet($senior,'projectteam!C8:C8');
        }

        //Game Designer Junior
        if($request->gamedesigner_junior){
            $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
            $Sheet->writeSheet($gameDesignerJunior,'projectteam!D9:D9');
        }
        //Game Designer Medior
        if($request->gamedesigner_medior){
            $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
            $Sheet->writeSheet($gameDesignerMedior,'projectteam!D10:D10');
        }
        //Game Designer Senior
        if($request->gamedesigner_senior){
            $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
            $Sheet->writeSheet($gameDesignerSenior,'projectteam!D11:D11');
        }
        //Experience Junior
        if($request->experience_junior){
            $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
            $Sheet->writeSheet($experienceDesignerJunior,'projectteam!D12:12');
        }
        //Experience Medior
        if($request->experience_medior){
            $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
            $Sheet->writeSheet($experienceDesignerMedior,'projectteam!D13:D13');
        }
        //Experience Senior
        if($request->experience_senior){
            $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
            $Sheet->writeSheet($experienceDesignerSenior,'projectteam!D14:D14');
        }
        // //UI UX
        if($request->ui_ux){
            $Ui_Ux[0] = implode(',',$request->ui_ux);
            $Sheet->writeSheet($Ui_Ux,'projectteam!D15:D15');
        }
        //Productontwerp junior
        if($request->productontwerp_junior){
            $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
            $Sheet->writeSheet($productOntWerpJunior,'projectteam!D16:D16');
        }
        //Productontwerp medior
        if($request->productontwerp_medior){
            $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
            $Sheet->writeSheet($productOntWerpMedior,'projectteam!D17:D17');
        }
        //Productontwerp Senior
        if($request->productontwerp_senior){
            $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
            $Sheet->writeSheet($productOntWerpSenior,'projectteam!D18:D18');
        }
        //Programmer junior
        if($request->programmer_junior){
            $programmerJunior[0] = implode(',',$request->programmer_junior);
            $Sheet->writeSheet($programmerJunior,'projectteam!D19:D19');
        }
        //Programmer medior
        if($request->programmer_medior){
            $programmerMedior[0] = implode(',',$request->programmer_medior);
            $Sheet->writeSheet($programmerMedior,'projectteam!D20:D20');
        }
        //Programmer Senior
        if($request->programmer_senior){
            $programmerSenior[0] = implode(',',$request->programmer_senior);
            $Sheet->writeSheet($programmerSenior,'projectteam!D21:D21');
        }
        //Story junior
        if($request->story_junior){
            $storyJunior[0] = implode(',',$request->story_junior);
            $Sheet->writeSheet($storyJunior,'projectteam!D22:D22');
        }
        //Story medior
        if($request->story_medior){
            $storyMedior[0] = implode(',',$request->story_medior);
            $Sheet->writeSheet($storyMedior,'projectteam!D23:D23');
        }
        //Story Senior
        if($request->story_senior){
            $storySenior[0] = implode(',',$request->story_senior);
            $Sheet->writeSheet($storySenior,'projectteam!D24:D24');
        }
        //Host
        if($request->host){
            $host[0] = implode(',',$request->host);
            $Sheet->writeSheet($host,'projectteam!D25:D25');
        }
        //Techniek
        if($request->techniek){
            $teckniek[0] = implode(',',$request->techniek);
            $Sheet->writeSheet($teckniek,'projectteam!D26:D26');
        }
        //Muziek
        if($request->muziek){
            $muziek[0] = implode(',',$request->muziek);
            $Sheet->writeSheet($muziek,'projectteam!D27:D27');
        }
        //Props
        if($request->props){
            $props[0] = implode(',',$request->props);
            $Sheet->writeSheet($props,'projectteam!D28:D28');
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
        $Sheet = new GoogleSheetService($spreadsheetId);
        if( !$Sheet->checkSheetExist($request->size) || !$Sheet->checkSheetExist('Projectteam')){
            return response()->json([
                'error' => "Your spreadsheet template doesn't match, please import excel template according to the project size you choose ( ".$request->size." )"
            ],400);
        }

        //Project Name Value
        $projectName[0] = $request->project_name;
        $Sheet->writeSheet($projectName,'projectteam!C4:C4');
        //Service Manager Value
        if($request->service_manager){
            $serviceManager[0] = implode(',',$request->service_manager);
            $Sheet->writeSheet($serviceManager,'projectteam!C5:C5');
        }
        //Office Manager Value
        if($request->office_manager){
            $officeManager[0] = implode(',',$request->office_manager);
            $Sheet->writeSheet($officeManager,'projectteam!C6:C6');
        }
        //Product Manager Value
        if($request->product_manager){
            $productManager[0] = implode(',',$request->product_manager);
            $Sheet->writeSheet($productManager,'projectteam!C7:C7');
        }
        //Senior Value
        if($request->senior){
            $senior[0] = implode(',',$request->senior);
            $Sheet->writeSheet($senior,'projectteam!C8:C8');
        }

        //Game Designer Junior
        if($request->gamedesigner_junior){
            $gameDesignerJunior[0] = implode(',',$request->gamedesigner_junior);
            $Sheet->writeSheet($gameDesignerJunior,'projectteam!D9:D9');
        }
        //Game Designer Medior
        if($request->gamedesigner_medior){
            $gameDesignerMedior[0] = implode(',',$request->gamedesigner_medior);
            $Sheet->writeSheet($gameDesignerMedior,'projectteam!D10:D10');
        }
        //Game Designer Senior
        if($request->gamedesigner_senior){
            $gameDesignerSenior[0] = implode(',',$request->gamedesigner_senior);
            $Sheet->writeSheet($gameDesignerSenior,'projectteam!D11:D11');
        }
        //Experience Junior
        if($request->experience_junior){
            $experienceDesignerJunior[0] = implode(',',$request->experience_junior);
            $Sheet->writeSheet($experienceDesignerJunior,'projectteam!D12:12');
        }
        //Experience Medior
        if($request->experience_medior){
            $experienceDesignerMedior[0] = implode(',',$request->experience_medior);
            $Sheet->writeSheet($experienceDesignerMedior,'projectteam!D13:D13');
        }
        //Experience Senior
        if($request->experience_senior){
            $experienceDesignerSenior[0] = implode(',',$request->experience_senior);
            $Sheet->writeSheet($experienceDesignerSenior,'projectteam!D14:D14');
        }
        // //UI UX
        if($request->ui_ux){
            $Ui_Ux[0] = implode(',',$request->ui_ux);
            $Sheet->writeSheet($Ui_Ux,'projectteam!D15:D15');
        }
        //Productontwerp junior
        if($request->productontwerp_junior){
            $productOntWerpJunior[0] = implode(',',$request->productontwerp_junior);
            $Sheet->writeSheet($productOntWerpJunior,'projectteam!D16:D16');
        }
        //Productontwerp medior
        if($request->productontwerp_medior){
            $productOntWerpMedior[0] = implode(',',$request->productontwerp_medior);
            $Sheet->writeSheet($productOntWerpMedior,'projectteam!D17:D17');
        }
        //Productontwerp Senior
        if($request->productontwerp_senior){
            $productOntWerpSenior[0] = implode(',',$request->productontwerp_senior);
            $Sheet->writeSheet($productOntWerpSenior,'projectteam!D18:D18');
        }
        //Programmer junior
        if($request->programmer_junior){
            $programmerJunior[0] = implode(',',$request->programmer_junior);
            $Sheet->writeSheet($programmerJunior,'projectteam!D19:D19');
        }
        //Programmer medior
        if($request->programmer_medior){
            $programmerMedior[0] = implode(',',$request->programmer_medior);
            $Sheet->writeSheet($programmerMedior,'projectteam!D20:D20');
        }
        //Programmer Senior
        if($request->programmer_senior){
            $programmerSenior[0] = implode(',',$request->programmer_senior);
            $Sheet->writeSheet($programmerSenior,'projectteam!D21:D21');
        }
        //Story junior
        if($request->story_junior){
            $storyJunior[0] = implode(',',$request->story_junior);
            $Sheet->writeSheet($storyJunior,'projectteam!D22:D22');
        }
        //Story medior
        if($request->story_medior){
            $storyMedior[0] = implode(',',$request->story_medior);
            $Sheet->writeSheet($storyMedior,'projectteam!D23:D23');
        }
        //Story Senior
        if($request->story_senior){
            $storySenior[0] = implode(',',$request->story_senior);
            $Sheet->writeSheet($storySenior,'projectteam!D24:D24');
        }
        //Host
        if($request->host){
            $host[0] = implode(',',$request->host);
            $Sheet->writeSheet($host,'projectteam!D25:D25');
        }
        //Techniek
        if($request->techniek){
            $teckniek[0] = implode(',',$request->techniek);
            $Sheet->writeSheet($teckniek,'projectteam!D26:D26');
        }
        //Muziek
        if($request->muziek){
            $muziek[0] = implode(',',$request->muziek);
            $Sheet->writeSheet($muziek,'projectteam!D27:D27');
        }
        //Props
        if($request->props){
            $props[0] = implode(',',$request->props);
            $Sheet->writeSheet($props,'projectteam!D28:D28');
        }

        Project::findorfail($id)->update([
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
        $sheet = new GoogleSheetService($project->sheetId);
        $data[0] = 'X';
        $sheet->writeSheet($data,$range);

        return response()->json(['message' => 'success']);
    }

    public function task(Request $request){
        $project = Project::findorfail($request->project_id);
        $spreadSheetId = $project->sheetId;
        $Sheet = new GoogleSheetService($spreadSheetId);
        if($project->size === 'Small'){
            $startProject = [];
            $brainStrom = [];
            $experienceDesign = [];
            $gameTrust = [];
            $experienceImpact = [];
            $afsluiting  = [];
            if(in_array('startProject',$request->filter)){
                $startProject = $Sheet->readSheet('Small!A5:B18');
            }
            if(in_array('brainStrom',$request->filter)){
                $brainStrom = $Sheet->readSheet('Small!C5:D12');
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesign = $Sheet->readSheet('Small!E5:F9');
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrust = $Sheet->readSheet('Small!A22:B47');
            }
            if(in_array('experienceImpact',$request->filter)){
                $experienceImpact = $Sheet->readSheet('Small!C22:D25');
            }
            if(in_array('afsluiting',$request->filter)){
                $afsluiting = $Sheet->readSheet('Small!C22:D26');
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
                $startProject = $Sheet->readSheet('Medium!A5:B20');
            }
            if(in_array('humanDesign',$request->filter)){
                $humanDesign = $Sheet->readSheet('Medium!C5:D15');
            }
            if(in_array('brainStrom',$request->filter)){
                $brainStrom = $Sheet->readSheet('Medium!E5:F13');
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesign = $Sheet->readSheet('Medium!G5:H12');
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrust = $Sheet->readSheet('Medium!A23:B45');
            }
            if(in_array('wowDesign',$request->filter)){
                $wowDesign = $Sheet->readSheet('Medium!C23:D45');
            }
            if(in_array('levering',$request->filter)){
                $levering = $Sheet->readSheet('Medium!E23:F26');
            }
            if(in_array('afsluiting',$request->filter)){
                $afsluiting = $Sheet->readSheet('Medium!G23:H28');
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
                $startProject = $Sheet->readSheet('Large!A5:B20');
            }
            if(in_array('humanDesign',$request->filter)){
                $humanDesign = $Sheet->readSheet('Large!C5:D15');
            }
            if(in_array('concepting',$request->filter)){
                $brainStrom = $Sheet->readSheet('Large!E5:F13');
            }
            if(in_array('experienceDesign',$request->filter)){
                $experienceDesign = $Sheet->readSheet('Large!G5:H12');
            }
            if(in_array('gameTrust',$request->filter)){
                $gameTrust = $Sheet->readSheet('Large!A23:B45');
            }
            if(in_array('wowDesign',$request->filter)){
                $wowDesign = $Sheet->readSheet('Large!C23:D45');
            }
            if(in_array('impactDesign',$request->filter)){
                $impactDesign = $Sheet->readSheet('Large!E23:F26');
            }
            if(in_array('afsluiting',$request->filter)){
                $afsluiting = $Sheet->readSheet('Large!G23:H28');
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
