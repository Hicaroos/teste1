<?php

use App\Http\Controllers\UsersController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuccessCaseController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home_page');
});

Route::post('/session', [UsersController::class, 'session']);

Route::middleware([AuthMiddleware::class])->group(function () {
    // Rotas protegidas por autenticação
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('success-cases', SuccessCaseController::class);
    Route::resource('partners', PartnerController::class);
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::get('/recovery', [AuthController::class, 'showRecovery'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::post('/register', [RegisterUserController::class, 'store'])->name('register');

