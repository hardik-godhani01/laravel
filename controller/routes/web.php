<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

// Route::get('/', function () {
//     return view('welcome');
// });
 
  
Route::controller(PageController::class)->group(function()
{
    Route::get('/','showHome')->name('home');

    Route::get('/user/{id}','showUser')->name('users');
    
    Route::get('/blog','showBlog')->name('blog');
});
// this is a normal controller with route make... 
// Route::get('/',[PageController::class,'showHome'])->name('home');

// Route::get('/user/{id}',[PageController::class,'showUser'])->name('users');

// Route::get('/blog',[PageController::class,'showBlog'])->name('blog');

Route::get('/test',TestingController::class);