<?php

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



Route::get('/', "App\Http\Controllers\DriverController@index");
Route::get('/edit/{id}', "App\Http\Controllers\DriverController@edit");
Route::get('/show/{id}', "App\Http\Controllers\DriverController@show");
Route::get('/register', "App\Http\Controllers\DriverController@register");
Route::get('/delete/{id}', "App\Http\Controllers\DriverController@destroy");
Route::post('/store', "App\Http\Controllers\DriverController@store");
Route::post('/update/{id}', "App\Http\Controllers\DriverController@update");

Route::get('/dustbin', [DustbinController::class, 'index']);
Route::get('/dustbin/show/{id}', [DustbinController::class, 'show']);
Route::get('/dustbin/edit/{id}', [DustbinController::class, 'edit']);
Route::get('/dustbin/create', [DustbinController::class, 'create']);
Route::get('/dustbin/delete/{id}', [DustbinController::class, 'destroy']);
Route::post('/dustbin/store', [DustbinController::class, 'store']);
Route::put('/dustbin/update/{id}', [DustbinController::class, 'update']);


