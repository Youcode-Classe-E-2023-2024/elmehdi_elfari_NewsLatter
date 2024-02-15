<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TemplateController;
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

/*Forget Password*/
Route::get('/', function () {
    return view('welcome');
});
Route::get("register", [RegisterController::class, 'create'])->name('Form-register')
    /*->middleware('guest')*/;
Route::post("register", [RegisterController::class, 'store'])->name('register');
Route::post('logout', [LogoutController::class, 'destroy'])
    /*->middleware('auth')*/;
Route::get("login", [LoginController::class, 'create'])->name('Form-login')
    /*->middleware('guest')*/;
Route::post("login", [LoginController::class, 'authenticate'])->name('login')
    /*->name("login")*/;


Route::post('/request', [ForgotPasswordLinkController::class, 'store']);
Route::get('/request', [ForgotPasswordLinkController::class, 'create']);
Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');


/*Temolate DAshboard*/
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

/*Subscribe DAshboard*/
Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');

Route::get('/subscribe', [SubscribeController::class, 'index'])->name('subscribe.section');


/*Temolate DAshboard*/
/*Route::get('/template', [TemplateController::class, 'manage_template'])->name('templates.manage-template');*/

Route::get('/template', [TemplateController::class, 'show'])->name('templates.show');

Route::post('/template', [TemplateController::class, 'store'])->name('templates.store')/*->middleware('auth')*/;

Route::get('/template/{template}/edit', [TemplateController::class, 'edit'])->name('templates.edit');

Route::put('/template/{template}', [TemplateController::class, 'update'])->name('templates.update');

Route::delete('/template/{template}', [TemplateController::class, 'destroy'])->name('templates.destroy');


/*Medias Dashboard*/
Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::post('/media', [MediaController::class, 'store']);
Route::delete('/media/{template}', [MediaController::class, 'delete'])->name('upload.delete');
