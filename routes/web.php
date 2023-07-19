<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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


Route::view('/','main')->name('main');
Route::view('/calc','calc')->name('calc');
Route::view('/about','about')->name('about');

Route::post('/calc',[OrderController::class,'store'])->name('calc.store');






