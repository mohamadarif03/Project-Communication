<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\CommunicationTypeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResponsbilityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('only_guest')->group(function () {
    Route::get('/',[AuthController::class,'view'])->name('/');
    Route::post('/', [AuthController::class, 'authenticating']);
});


Route::middleware('auth', 'verified')->group(function () {
    Route::middleware('admin')->group(function(){
        
        //Rule
        Route::get('/data-rule',[RuleController::class,'data']);
        Route::get('/rule',[RuleController::class,'view']);
        Route::post('/store-rule',[RuleController::class,'insert']);
        Route::put('/update-rule/{id}',[RuleController::class,'update']);
        Route::delete('/delete-rule/{id}',[RuleController::class,'delete']);

        //Communicationn Type Task
        Route::get('/data-type',[CommunicationTypeController::class,'data']);
        Route::get('/communication-type-task',[CommunicationTypeController::class,'view']);
        Route::get('/data-communication-type-task',[CommunicationTypeController::class,'data']);
        Route::get('/data-communication-type-task-paginate',[CommunicationTypeController::class,'paginate']);
        Route::post('/store-communication-type-task',[CommunicationTypeController::class,'insert']);
        Route::put('/update-communication-type-task/{id}',[CommunicationTypeController::class,'update']);
        Route::delete('/delete-communication-type-task/{id}',[CommunicationTypeController::class,'delete']);
        Route::get('/communication-type/desc/{id}', [CommunicationTypeController::class, 'desc']);

        //Communicationn Type Standart
        Route::get('/data-communication-type-standart-paginate',[CommunicationTypeController::class,'paginateStandart']);
        Route::get('/communication-type-standart',[CommunicationTypeController::class,'viewStandart']);
        Route::post('/store-communication-type-standart',[CommunicationTypeController::class,'insertStandart']);
        Route::put('/update-communication-type-standart/{id}',[CommunicationTypeController::class,'updateStandart']);
        Route::delete('/delete-communication-type-standart/{id}',[CommunicationTypeController::class,'deleteStandart']);

        //Role
        Route::get('/data-role-paginate',[RoleController::class,'paginate']);
        Route::post('/store-role',[RoleController::class,'store']);
        Route::put('/update-role/{id}',[RoleController::class,'update']);
        Route::delete('/delete-role/{id}',[RoleController::class,'delete']);

        //User
        Route::get('/data-user',[UserController::class,'data']);
        Route::get('/users',[UserController::class,'view']);
        Route::post('/store-user',[UserController::class,'insert'])->name('store-user');
        Route::put('/update-user/{id}',[UserController::class,'update']);
        Route::delete('/delete-user/{id}',[UserController::class,'delete']);
        Route::get('/profil',[ProfileController::class,'view']);
        
    });

    Route::middleware('user')->group(function(){
            
        //Communication
        Route::get('/data-communication-type-standart',[CommunicationTypeController::class,'dataStandart']);
        Route::get('/communication-sent',[CommunicationController::class,'communicationSent']);
        Route::get('/communication-receive',[CommunicationController::class,'communicationReceive']);
        Route::post('/store-communication',[CommunicationController::class,'insert']);
        Route::get('/data-sent-communication',[CommunicationController::class,'sent']);
        Route::get('/data-receive-communication',[CommunicationController::class,'receive']);
        Route::get('/data-receive-communication-dashboard-uncomplete',[CommunicationController::class,'receiveUncomplete']);
        Route::get('/data-receive-communication-dashboard-complete',[CommunicationController::class,'receiveComplete']);

        //Responbilities
        Route::get('/responsbility-sent',[ResponsbilityController::class,'view']);
        Route::get('/responsbility-receive',[ResponsbilityController::class,'viewReceive']);
        Route::post('/store-responsbility',[ResponsbilityController::class,'insert']);
        Route::get('/data-task-type',[ResponsbilityController::class,'task_type']);
        Route::get('/data-task-type-filter',[ResponsbilityController::class,'task_type_filter']);
        Route::get('/data-sent-task',[ResponsbilityController::class,'sent']);
        Route::get('/data-receive-task',[ResponsbilityController::class,'receive']);
        Route::get('/profil1',[ProfileController::class,'view1']);

        //Notification
        Route::get('/data-notification',[NotificationController::class,'data']);
        Route::get('/read-notification/{id}',[NotificationController::class,'delete']);
        Route::get('/read-all',[NotificationController::class,'readall']);

        Route::get('/download-template/{type}',[ProjectController::class,'download']);
        Route::post('/create-project',[GoogleSheetController::class,'createProjectTeam']);
        Route::put('/update-project',[GoogleSheetController::class,'updateProjectTeam']);
        Route::get('/data-project',[ProjectController::class,'data']);

    });

    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('/dashboard',[Controller::class,'index']);
    Route::get('/role',[RoleController::class,'view']);
    //Data
    Route::get('/data-role',[RoleController::class,'data']);
    Route::get('/data-user-value',[UserController::class,'dataUser']);
    //Profil
    Route::put('/profilUpdate/{id}',[ProfileController::class,'update']);
    Route::put('/resetPassword/{id}',[ProfileController::class,'reset']);
    Route::get('/project',[ProjectController::class,'view']);
    Route::get('/project-team/{id}',[ProjectController::class,'view1']);
    Route::get('/project-responsbility/{id}',[ProjectController::class,'view2']);
    Route::get('/addproject',[ProjectController::class,'view3']);
    Route::get('/updateproject',[ProjectController::class,'viewupdate']);
    Route::get('/read-all',[NotificationController::class,'readall']);
    Route::get('/data-respons',[CommunicationController::class,'data']);
    Route::get('/data-project-team',[GoogleSheetController::class,'team']);
});
Route::put('/check/{id}',[CommunicationController::class,'check'])->name('check');
Route::put('/done/{id}',[CommunicationController::class,'done'])->name('done');
Route::get('/sheet',[GoogleSheetController::class,'auth']);
Route::get('/newsheet',[GoogleSheetController::class,'new']);

