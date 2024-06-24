<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\PegawaiController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|Route::get('/pegawai', [PostController::class, 'index']);
*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);

route::middleware('auth')->group(function (){
    Route::get('/dashboard', [LoginController::class, 'dashboard']);
    Route::resource('pegawai', \App\Http\Controllers\PostController::class);
});

Route::post('/auth/logout', [LoginController::class, 'logout']);


