<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController; /*Подключаем контроллеры*/
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::name('user.')->group(function(){

    //Route::view('/profile','profile')->middleware('auth')->name('profile');// применяем мидлвер Middleware/Authenticate.php, если не будет аутенфикации то этот маршрут не сработает  и мидлвер направит на форму login( в Authenticate.php прописывается соотв. роутер)

    Route::get('/profile',[ProfileController::class,'index'])->middleware('auth')->name('profile');

   Route::get('/registration',[RegisterController::class,'index'])->name('registration');
    Route::post('/registration',[RegisterController::class,'save'])->name('save');
    

    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);

    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

});    