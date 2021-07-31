<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form',[\App\Http\Controllers\StudentController::class,'create']);
//Route::post('/form',[\App\Http\Controllers\StudentController::class,'store']);
Route::get('/list',[\App\Http\Controllers\StudentController::class,'list']);
Route::get('/edit/{id}',[\App\Http\Controllers\StudentController::class,'edit']);
Route::post('/edit/{id}',[\App\Http\Controllers\StudentController::class,'update']);
Route::get('/delete/{id}',[\App\Http\Controllers\StudentController::class,'destroy']);
