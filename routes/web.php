<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AboutUsController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\NewsController; 
use App\Http\Controllers\ProgramController; 




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
 
 