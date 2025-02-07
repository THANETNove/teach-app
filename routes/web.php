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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-video', [App\Http\Controllers\HomeController::class, 'create'])->name('create-video');
Route::post('/register-store', [App\Http\Controllers\HomeController::class, 'store'])->name('register-store');
Route::get('/delete-user/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete-user');