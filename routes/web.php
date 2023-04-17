<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\CommunicationTypeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\responsbilityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UserController;
use App\Http\Requests\CommunicationTypeRequest;
use App\Models\Communication;
use App\Models\CommunicationType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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




Route::middleware('auth')->group(function () {
    Route::middleware('auth:sanctum','verified','admin')->group(function(){
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
    
    Route::middleware('auth:sanctum','verified','user')->group(function(){

        //Communication
        Route::get('/data-communication-type-standart',[CommunicationTypeController::class,'dataStandart']);
        Route::get('/communication',[CommunicationController::class,'communication']);
        Route::post('/store-communication',[CommunicationController::class,'insert']);
        Route::get('/data-sent-communication',[CommunicationController::class,'sent']);
        Route::get('/data-receive-communication',[CommunicationController::class,'receive']);

        //Responbilities
        Route::get('/responsbility',[responsbilityController::class,'view']);
        Route::post('/store-responsbility',[responsbilityController::class,'insert']);
        Route::get('/data-task-type',[ResponsbilityController::class,'task_type']);
        Route::get('/data-sent-task',[ResponsbilityController::class,'sent']);
        Route::get('/data-receive-task',[ResponsbilityController::class,'receive']);
        Route::get('/profil1',[ProfileController::class,'view1']);

    });
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('/dashboard',[Controller::class,'index']);
    Route::get('/role',[RoleController::class,'view']);
    //Data
    Route::get('/data-role',[RoleController::class,'data']);
    Route::get('/data-user-value',[UserController::class,'dataUser']);
    //Profil
    Route::put('/profilUpdate/{id}',[ProfileController::class,'update']);
    Route::get('/project',[projectController::class,'view']);

    Route::get('/data-respons',[CommunicationController::class,'data']);

    
});
Route::put('/check/{id}',[CommunicationController::class,'check'])->name('check');

Route::get('/get-communication-data/{month}', function($month) {
    $userId = Auth::user()->id;
    $userIdString = strval($userId);
    $data = [];
    $grafik = DB::table('communications')
        ->select(DB::raw('status, COUNT(*) as total'))
        ->groupBy('status')
        ->whereRaw("FIND_IN_SET('$userIdString', `to`)")
        ->whereRaw("MONTH(created_at) = '$month'")
        ->get();

    $labels = $grafik->pluck('status')->map(function ($status) {
        return $status == 0 ? 'Uncomplete' : 'Complete';
    })->toArray();

    $data = $grafik->pluck('total')->toArray();

    return response()->json([
        'labels' => $labels,
        'data' => $data
    ]);
});
