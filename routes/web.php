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
Route::get('login',[LoginController::class, 'index']);
Route::get('login/create',[LoginController::class, 'create'])->name('login.create');
Route::get('login/store',[LoginController::class, 'store'])->name('login.store');
