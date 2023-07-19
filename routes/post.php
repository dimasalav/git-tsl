<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; /*Подключаем контроллеры*/


Route::name('post.')->group (function() {

	Route::get('/posts', [PostController::class,'index'])->name('index');
	Route::get('/posts/{post}', [PostController::class,'show'])->name('show');
	Route::post('/posts',[PostController::class,'store'])->name('store');
	Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('edit');
	Route::patch('/posts/{post}',[PostController::class,'update'])->name('update');
	Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('destroy');
	
});   	