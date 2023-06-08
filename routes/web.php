<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\profileController;

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
Route::get('/landing',[landingController::class,'index'])->name('landing');
Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/profile',[profileController::class,'index'])->name('profile');

Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');