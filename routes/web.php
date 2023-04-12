<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RuleController;
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


Route::get('signin',[AuthController::class,'index'])->name('signin');
Route::post('signin', [AuthController::class, 'authenticating']);

Route::get('logout', [AuthController::class, 'logout']);



Route::get('/dashboard',[Controller::class,'index'])->middleware('auth');
Route::get('/dashboardadmin',[Controller::class,'admin']);
Route::get('/role',[RoleController::class,'index']);
Route::get('/rule',[RuleController::class,'index']);
Route::get('/communication-type',[CommunicationController::class,'index']);
Route::get('/users',[Controller::class,'users']);


Route::get('/communication',[CommunicationController::class,'communication']);