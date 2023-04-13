<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\CommunicationTypeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UserController;
use App\Http\Requests\CommunicationTypeRequest;
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


Route::get('/',[AuthController::class,'index'])->name('/');
Route::post('/', [AuthController::class, 'authenticating']);

Route::get('logout', [AuthController::class, 'logout']);


Route::get('/dashboard',[Controller::class,'index'])->middleware('auth');
Route::get('/dashboardadmin',[Controller::class,'admin']);
Route::get('/role',[RoleController::class,'index']);

//Rule
Route::get('/rule',[RuleController::class,'index']);
Route::post('/store-rule',[RuleController::class,'insert']);

//Communicationn Type
Route::get('/communication-type',[CommunicationTypeController::class,'index']);
Route::post('/store-communication-type',[CommunicationTypeController::class,'insert'])->name('store-communication-type');
Route::delete('/delete/{id}',[CommunicationTypeController::class,'delete']);

//User
Route::get('/users',[UserController::class,'index']);
Route::post('/store-user',[UserController::class,'insert'])->name('store-user');
Route::put('/update-user/{id}',[UserController::class,'update']);
Route::delete('/delete-user/{id}',[UserController::class,'delete']);


Route::get('/communication',[CommunicationController::class,'communication']);

//Role
Route::get('/data-role',[RoleController::class,'data']);
Route::post('/store-role',[RoleController::class,'store']);
Route::put('/update-role/{id}',[RoleController::class,'update']);
Route::delete('/delete-role/{id}',[RoleController::class,'delete']);