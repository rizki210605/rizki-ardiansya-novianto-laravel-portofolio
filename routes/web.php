<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\skillController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\pengaturanHalamanController;

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

Route::get('/',[homeController::class,"index"]);

Route::redirect('home','dashboard');

Route::get('/auth', [authController::class,"index"])->name('login')->middleware('guest');
Route::get('/auth/redirect',[authController::class,"redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::get('/auth/logout', [authController::class, "logout"]);



Route::prefix('dashboard')->middleware('auth')->group(
    function(){
        Route::get('/',[halamanController::class,'index']);
        Route::resource('halaman',halamanController::class);
        Route::resource('experience',experienceController::class);
        Route::resource('education',educationController::class);
        Route::get('skill',[skillController::class,"index"])->name('skill.index');
        Route::post('skill',[skillController::class,"update"])->name('skill.update');
        Route::get('profil',[profilController::class,"index"])->name('profil.index');
        Route::post('profil',[profilController::class,"update"])->name('profil.update');
        Route::get('pengaturanhalaman',[pengaturanHalamanController::class,"index"])->name('pengaturanhalaman.index');
        Route::post('pengaturanhalaman',[pengaturanHalamanController::class,"update"])->name('pengaturanhalaman.update');
        
    }
);
