<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/register',[UserController::class,'index'])->middleware('guest');
Route::post('/register',[UserController::class,'store'])->middleware('guest');

Route::get('/logout',[UserController::class,'destroy']);

Route::post('/login',[UserController::class,'userlogin'])->middleware('guest');

Route::get('/home',[QuestionController::class,'home'])->middleware('auth');

Route::get('/users',[UserController::class,'listofuser'])->middleware('auth');



Route::get('/askquestion',[QuestionController::class,'index'])->middleware('auth');

Route::post('/askquestion',[QuestionController::class,'store'])->middleware('auth');

Route::post('/answer/{id}',[AnswerController::class,'reply'])->middleware('auth');

Route::get('/{id}/comments',[AnswerController::class,'view'])->middleware('auth');

Route::get('/myprofile',[ProfileController::class,'show'])->middleware('auth');

Route::put('/uploadpic/{id}',[ProfileController::class,'uploadpic'])->middleware('auth');

Route::get('/users/{name}/{id}',[ProfileController::class,'userprofile'])->middleware('auth');


Route::get('/editprofile/{name}/{id}',[ProfileController::class,'showedit'])->middleware('auth');
Route::put('/editprofile/{id}',[ProfileController::class,'edit'])->middleware('auth');


