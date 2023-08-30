<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Vehicle_PackageController;
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
    return view('landingpage.index');
});

route::resource('login', LoginController::class);
route::resource('register', RegisterController::class);
route::resource('login', LoginController::class);
route::resource('vehicle', VehicleController::class);
route::resource('admin', AdminController::class);
route::resource('order', OrderController::class);
Route::get('/landing', [LandingpageController::class, 'index'])->name('landingpage.index');

//vehicle_packages
Route::get('vehicle_package', [Vehicle_PackageController::class, 'index'])->name('vehicle_package.index');
Route::get('vehicle_package/create', [Vehicle_PackageController::class, 'create'])->name('vehicle_package.create');
Route::post('vehicle_package', [Vehicle_PackageController::class, 'store'])->name('vehicle_package.store');
Route::get('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'edit'])->name('vehicle_package.edit');
Route::put('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'update'])->name('vehicle_package.update');
Route::delete('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'destroy'])->name('vehicle_package.destroy');



