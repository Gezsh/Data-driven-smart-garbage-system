<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DustbinController;
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

// Route::get('/', function () {
//    return view('welcome');
// });



Route::get('/', [DriverController::class,'index']);
Route::get('/edit/{id}', [DriverController::class ,'edit']);
Route::get('/show/{id}', [DriverController::class,'show']);
Route::get('/register', [DriverController::class,'register']);
Route::get('/delete/{id}', [DriverController::class,'destroy']);
Route::post('/store', [DriverController::class,'store']);
Route::post('/update/{id}', [DriverController::class,'update']);

Route::get('/dustbin', [DustbinController::class, 'index']);
Route::get('/dustbin/show/{id}', [DustbinController::class, 'show']);
Route::get('/dustbin/edit/{id}', [DustbinController::class, 'edit']);
Route::get('/dustbin/create', [DustbinController::class, 'create']);
Route::get('/dustbin/delete/{id}', [DustbinController::class, 'destroy']);
Route::post('/dustbin/store', [DustbinController::class, 'store']);
Route::put('/dustbin/update/{id}', [DustbinController::class, 'update']);


Route::put('/admin/register', [AdminController::class, 'register']);


