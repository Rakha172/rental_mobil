<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

route::resource('login', LoginController::class);
route::resource('register', RegisterController::class);
route::get('barang', [BarangController::class, 'index'])->name('barang.index');
route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');

