<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/insert', [StudentController::class,'store']);

Route::get('/view', [StudentController::class,'view']);
Route::get('/delete/{id}', [StudentController::class,'destroy']);

Route::get('/edit/{id}', [StudentController::class,'edit']);

Route::put('/update/{id}', [StudentController::class,'update']);


