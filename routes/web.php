<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


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
// public index
Route::get('/',[HomeController::class,'index'])->name('home');
 
// about
Route::get('about',[AboutController::class,'about'])->name('about');

Route::get('articles/{id}',[ArticleController::class,'articles'])->name('articles');

