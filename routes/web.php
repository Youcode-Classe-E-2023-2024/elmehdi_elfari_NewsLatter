<?php

use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\NewsController;
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

Route::get('/',[NewsController::class,'welcome'])->name('welcome');

Route::get('/register',[AuthController::class,'register'])->name('Form-register');

Route::post('/register',[authController::class,'store'])->name('register');

Route::get('/login',[authController::class,'login'])->name('Form-login');

Route::post('/login',[authController::class,'loginPost'])->name('login');

Route::post('/logout', [Logoutcontroller::class, 'destroy'])->middleware('auth');

Route::get('/dashboard',[NewsController::class,'show'])->name('dashboard');

Route::get('/subscribe',[NewsController::class,'showSub'])->name('sub');

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'show'])->name('forgot');

Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('forgot');

Route::post('/forgot-password/{token}', [ForgotPasswordController::class, 'reset']);
