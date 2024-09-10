<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\LoginController;
use App\Http\Controllers\HcpController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

Route::get('/introduction', [HcpController::class, 'introduction'])->name('introduction');

Route::get('/hcp', [HcpController::class, 'showHcpForm'])->name('hcp.form');
Route::post('/hcp/submit', [HcpController::class, 'submitHcpForm'])->name('hcp.submit');
Route::get('/doctor/registration', [HcpController::class, 'showDoctorRegistration'])->name('hcp.registration');
Route::get('/doctors/list', [HcpController::class, 'showDoctorsList'])->name('hcp.list');


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


use App\Http\Controllers\QuizController;

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz_answer', [QuizController::class, 'quiz_answer'])->name('quiz_answer');

Route::get('/quiz2', [QuizController::class, 'index'])->name('quiz2');
Route::get('/quiz_answer2', [QuizController::class, 'quiz_answer2'])->name('quiz_answer2');


Route::post('/quiz/spin', [QuizController::class, 'spin'])->name('quiz.spin');
Route::post('/quiz/next', [QuizController::class, 'next'])->name('quiz.next');
