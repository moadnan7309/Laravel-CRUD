<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class,'home']);
Route::get('register', [UserController::class,'register']);
Route::post('register', [UserController::class,'register']);
Route::get('login', [UserController::class,'login']);
Route::post('login', [UserController::class,'login']);
Route::get('dashboard', [UserController::class,'dashboard']);
Route::get('delete/{id}', [UserController::class,'delete']);
Route::get('edit/{id}', [UserController::class,'edit']);
Route::post('update', [UserController::class,'update']);
Route::get('logout',[UserController::class,'logout']);
