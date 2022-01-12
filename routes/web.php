<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Auth;


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
})->name('welcome');

Route::resource('/admin/user', UserController::class);
Route::resource('/admin/exam', ExamController::class);
Route::resource('/admin/question', QuestionController::class);
Route::post('/ques/{id}', [QuestionController::class, 'submitAns'])->name('question.submitAns');


// Public 



Route::get('/', function () {
    return view('public.index');
})->name('home');
/* Route::get('/exam', function () {
    return view('public.exam');
})->name('exam'); */
/* Route::get('/question', function () {
    return view('public.question');
})->name('question'); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
