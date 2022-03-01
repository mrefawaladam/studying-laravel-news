<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AboutUsController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\NewsController; 
use App\Http\Controllers\ProgramController; 
use App\Http\Controllers\ContactController; 





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
 
// products
Route::get('/category/marbel-edu-games',[CategoryController::class,'categoryOne']);
Route::get('/category/marbel-and-friends-kids-games',[CategoryController::class,'categoryTwo']);
Route::get('/category/riri-story-books',[CategoryController::class,'categoryTree']);
Route::get('/category/kolak-kids-songs',[CategoryController::class,'categoryFour']);
// news
Route::get('/news',[NewsController::class,'index']);
Route::get('/news/{keyword}',[NewsController::class,'newsKeyword']);
// program
Route::get('/program/karir',[ProgramController::class,'karir']);
Route::get('/program/magang',[ProgramController::class,'magang']);
Route::get('/program/kunjungan-industri',[ProgramController::class,'kunjunganIndustri']);
// about us
Route::get('/about-us',[AboutUsController::class,'index']);
// contact us
Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-us/post',[ContactController::class,'store']);




