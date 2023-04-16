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
use App\Models\CommunicationType;
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
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/dashboard',[Controller::class,'index']);
Route::get('/role',[RoleController::class,'view']);

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
Route::get('/data-communication-type-standart',[CommunicationTypeController::class,'dataStandart']);
Route::post('/store-communication-type-standart',[CommunicationTypeController::class,'insertStandart']);
Route::put('/update-communication-type-standart/{id}',[CommunicationTypeController::class,'updateStandart']);
Route::delete('/delete-communication-type-standart/{id}',[CommunicationTypeController::class,'deleteStandart']);

//User
Route::get('/data-user',[UserController::class,'data']);
Route::get('/data-user-value',[UserController::class,'dataUser']);
Route::get('/users',[UserController::class,'view']);
Route::post('/store-user',[UserController::class,'insert'])->name('store-user');
Route::put('/update-user/{id}',[UserController::class,'update']);
Route::delete('/delete-user/{id}',[UserController::class,'delete']);


Route::get('/communication',[CommunicationController::class,'communication']);
Route::post('/store-communication',[CommunicationController::class,'insert']);

//Role
Route::get('/data-role-paginate',[RoleController::class,'paginate']);
Route::get('/data-role',[RoleController::class,'data']);
Route::post('/store-role',[RoleController::class,'store']);
Route::put('/update-role/{id}',[RoleController::class,'update']);
Route::delete('/delete-role/{id}',[RoleController::class,'delete']);

//Profil
Route::get('/profil',[ProfileController::class,'view']);
Route::put('/profilUpdate/{id}',[ProfileController::class,'update']);


Route::get('/responsbility',[responsbilityController::class,'view']);

Route::get('/project',[projectController::class,'view']);

Route::get('/data-respons',[CommunicationController::class,'data']);

//Communication
Route::get('/data-sent-communication',[CommunicationController::class,'sent']);
Route::get('/data-receive-communication',[CommunicationController::class,'receive']);

//Responbilities
Route::get('/data-task-type',[ResponsbilityController::class,'task_type']);

});
