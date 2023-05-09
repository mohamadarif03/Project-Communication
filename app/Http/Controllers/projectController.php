<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\GoogleSheetService;
use App\Models\Project;
use App\Models\ProjectMember;

class ProjectController extends Controller
{
    public function view()
    {
        if(in_array('8',Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array('9',Auth()->user()->userrole->pluck('role_id')->toarray())){
            return view('user.projectmanager');
        }
        return view('user.project');
    }
    public function projectTeam($id)
    {
        $data = Project::findorfail($id);
        return view('user.projectTeam',['data' => $data ]);
    }
    public function projectResponsbility($id)
    {
        $data = Project::findorfail($id);
        return view('user.projectResponsbility',['data' => $data]);
    }
    public function addProject()
    {
        return view('user.addproject');
    }
    public function update($id){
        $project = Project::findorfail($id);
        $spreadsheetId = $project->sheetId;
        $titleSheet = new GoogleSheetService('projectteam!C4:C4');
        $titleSheet->documentId = $spreadsheetId;
        $titleSheet->readSheet();
        //Service Manager Value
        $serviceManagerSheet = new GoogleSheetService('projectteam!C5:C5');
        $serviceManagerSheet->documentId = $spreadsheetId;
        $serviceManagerSheet->readSheet();
        //Office Manager Value
        $officeManagerSheet = new GoogleSheetService('projectteam!C6:C6');
        $officeManagerSheet->documentId = $spreadsheetId;
        $officeManagerSheet->readSheet();
        //Product Manager Value
        $productManagerSheet = new GoogleSheetService('projectteam!C7:C7');
        $productManagerSheet->documentId = $spreadsheetId;
        $productManagerSheet->readSheet();
        //Senior Value
        $seniorSheet = new GoogleSheetService('projectteam!C8:C8');
        $seniorSheet->documentId = $spreadsheetId;
        $seniorSheet->readSheet();

        //Game Designer Junior
        $gameDesignerJuniorSheet = new GoogleSheetService('projectteam!D9:D9');
        $gameDesignerJuniorSheet->documentId = $spreadsheetId;
        $gameDesignerJuniorSheet->readSheet();
        //Game Designer Medior
        $gameDesignerMediorSheet = new GoogleSheetService('projectteam!D10:D10');
        $gameDesignerMediorSheet->documentId = $spreadsheetId;
        $gameDesignerMediorSheet->readSheet();
        //Game Designer Senior
        $gameDesignerSeniorSheet = new GoogleSheetService('projectteam!D11:D11');
        $gameDesignerSeniorSheet->documentId = $spreadsheetId;
        $gameDesignerSeniorSheet->readSheet();
        //Experience Junior
        $experienceDesignerJuniorSheet = new GoogleSheetService('projectteam!D12:12');
        $experienceDesignerJuniorSheet->documentId = $spreadsheetId;
        $experienceDesignerJuniorSheet->readSheet();
        //Experience Medior
        $experienceDesignerMediorSheet = new GoogleSheetService('projectteam!D13:D13');
        $experienceDesignerMediorSheet->documentId = $spreadsheetId;
        $experienceDesignerMediorSheet->readSheet();
        //Experience Senior
        $experienceDesignerSeniorSheet = new GoogleSheetService('projectteam!D14:D14');
        $experienceDesignerSeniorSheet->documentId = $spreadsheetId;
        $experienceDesignerSeniorSheet->readSheet();
        // //UI UX
        $Ui_UxSheet = new GoogleSheetService('projectteam!D15:D15');
        $Ui_UxSheet->documentId = $spreadsheetId;
        $Ui_UxSheet->readSheet();
        //Productontwerp junior
        $productOntWerpJuniorSheet = new GoogleSheetService('projectteam!D16:D16');
        $productOntWerpJuniorSheet->documentId = $spreadsheetId;
        $productOntWerpJuniorSheet->readSheet();
        //Productontwerp medior
        $productOntWerpMediorSheet = new GoogleSheetService('projectteam!D17:D17');
        $productOntWerpMediorSheet->documentId = $spreadsheetId;
        $productOntWerpMediorSheet->readSheet();
        //Productontwerp Senior
        $productOntWerpSeniorSheet = new GoogleSheetService('projectteam!D18:D18');
        $productOntWerpSeniorSheet->documentId = $spreadsheetId;
        $productOntWerpSeniorSheet->readSheet();
        //Programmer junior
        $programmerJuniorSheet = new GoogleSheetService('projectteam!D19:D19');
        $programmerJuniorSheet->documentId = $spreadsheetId;
        $programmerJuniorSheet->readSheet();
        //Programmer medior
        $programmerMediorSheet = new GoogleSheetService('projectteam!D20:D20');
        $programmerMediorSheet->documentId = $spreadsheetId;
        $programmerMediorSheet->readSheet();
        //Programmer Senior
        $programmerSeniorSheet = new GoogleSheetService('projectteam!D21:D21');
        $programmerSeniorSheet->documentId = $spreadsheetId;
        $programmerSeniorSheet->readSheet();
        //Story junior
        $storyJuniorSheet = new GoogleSheetService('projectteam!D22:D22');
        $storyJuniorSheet->documentId = $spreadsheetId;
        $storyJuniorSheet->readSheet();
        //Story medior
        $storyMediorSheet = new GoogleSheetService('projectteam!D23:D23');
        $storyMediorSheet->documentId = $spreadsheetId;
        $storyMediorSheet->readSheet();
        //Story Senior
        $storySeniorSheet = new GoogleSheetService('projectteam!D24:D24');
        $storySeniorSheet->documentId = $spreadsheetId;
        $storySeniorSheet->readSheet();
        //Host
        $hostSheet = new GoogleSheetService('projectteam!D25:D25');
        $hostSheet->documentId = $spreadsheetId;
        $hostSheet->readSheet();
        //Techniek
        $teckniekSheet = new GoogleSheetService('projectteam!D26:D26');
        $teckniekSheet->documentId = $spreadsheetId;
        $teckniekSheet->readSheet();
        //Muziek
        $muziekSheet = new GoogleSheetService('projectteam!D27:D27');
        $muziekSheet->documentId = $spreadsheetId;
        $muziekSheet->readSheet();
        //Props
        $propsSheet = new GoogleSheetService('projectteam!D28:D28');
        $propsSheet->documentId = $spreadsheetId;
        $propsSheet->readSheet();
    }
    public function viewupdate($id)
    {
        $data = Project::findorfail($id);
        return view('user.updateproject',['data' => $data]);
    }
    public function download($type){
        if($type == 'small'){
            $filePath = public_path('template/small.xlsx');
            return response()->download($filePath, 'SmallProject.xlsx');
        }else if($type == 'medium'){
            $filePath = public_path('template/medium.xlsx');
            return response()->download($filePath, 'MediumProject.xlsx');
        }else if($type == 'large'){
            $filePath = public_path('template/large.xlsx');
            return response()->download($filePath, 'LargeProject.xlsx');
        }
    }

    public function data(Request $request){
        if($request->year === '-1'){
            if(in_array(8,Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array(9,Auth()->user()->userrole->pluck('role_id')->toarray())){
                $data = Project::where('status','LIKE','%'.$request->status.'%')
                ->paginate(6);
            }else{
                $data = Project::whereHas('projectmember', function($query) {
                    $query->where('user_id', Auth()->user()->id);
                })->where('status','LIKE','%'.$request->status.'%')
                ->paginate(6);
            }
        }else{
            if(in_array(8,Auth()->user()->userrole->pluck('role_id')->toarray()) || in_array(9,Auth()->user()->userrole->pluck('role_id')->toarray())){
                $data = Project::where('status','LIKE','%'.$request->status.'%')
                ->whereYear('created_at',$request->year)
                ->paginate(6);
            }else{
                $data = Project::whereHas('projectmember', function($query) {
                    $query->where('user_id', Auth()->user()->id);
                })->where('status','LIKE','%'.$request->status.'%')
                ->whereYear('created_at',$request->year)
                ->paginate(6);
            }
        }
        
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

    public function mark($id){
        Project::findorfail($id)->update([
            'status' => 'done'
        ]);
        return response()->json(['message' => 'success']);
    }
    public function delete($id){
        $user = ProjectMember::where('project_id',$id)->delete();
        
        Project::findorfail($id)->delete();
        return response()->json([
            'success' => 'Success Delete Role!'
        ],200);
    }
    
}
