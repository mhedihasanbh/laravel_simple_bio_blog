<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\HomeController;
use App\Http\Controllers\frontEnd\Codequestion;
use App\Http\Controllers\blogHomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CodeController;
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
 
Route::resource('/', App\Http\Controllers\frontEnd\HomeController::class);
Route::resource('/codequestion', App\Http\Controllers\frontEnd\Codequestion::class);
Route::resource('/socialmedia', App\Http\Controllers\social::class);
Route::resource('/questions', App\Http\Controllers\QuestionController::class);
Route::resource('/ans', App\Http\Controllers\AnswerController::class);
Route::resource('/code', App\Http\Controllers\CodeController::class);
Route::resource('/websitesettings', App\Http\Controllers\WebsiteSettings::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
