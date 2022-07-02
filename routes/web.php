<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogHomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\singlePostController;
use App\Http\Controllers\viewSinglePost;
 use App\Http\Controllers\WebsiteSettings;


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
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\blogHomeController::class, 'index']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::resource('/category', App\Http\Controllers\categoryController::class);
Route::resource('/singlepost', App\Http\Controllers\singlePostController::class);
Route::resource('/singlepostview', App\Http\Controllers\viewSinglePost::class);
Route::resource('/socialmedia', App\Http\Controllers\social::class);
Route::resource('/websitesettings', App\Http\Controllers\WebsiteSettings::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
