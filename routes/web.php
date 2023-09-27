<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\SettingController;
use App\Models\Setting;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Order_DetailController;
use App\Http\Controllers\Vehicle_PackageController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('landingpage.index');
});

route::resource('register', RegisteredUserController::class);
route::resource('payment', PaymentController::class);
Route::get('/landing', [LandingpageController::class, 'index'])->name('landingpage.index');
Route::get('payment/create/{id}', [PaymentController::class, 'create'])->name('payment.create');
Route::get('order/create/{id}', [OrderController::class, 'create'])->name('order.create');
Route::post('order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/package', [PackageController::class, 'index'])->name('package.index');
Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');

// Route::get('/booking',[BookingController::class,'index'])->name('booking.index');


route::middleware(['auth', 'must-admin'])->group(function () {
    route::resource('admin', AdminController::class);
    route::resource('order_detail', Order_DetailController::class);
    route::resource('setting', SettingController::class);
    route::get('order', [OrderController::class, 'index'])->name('order.index');
    route::delete('order/destroy/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::get('payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('order_detail/update{id}', [Order_DetailController::class, 'store'])->name('order_detail.update');
});

route::middleware(['auth', 'must-admin'])->group(function () {
    Route::get('vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::post('vehicle/update{id}', [VehicleController::class, 'store'])->name('vehicle.update');
    Route::get('vehicle/edit{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::delete('vehicle/destroy/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
    Route::put('/vehicle/{id}', 'App\Http\Controllers\VehicleController@update')->name('vehicle.update');
});

route::middleware(['auth', 'must-admin'])->group(function () {
    Route::get('vehicle_package', [Vehicle_PackageController::class, 'index'])->name('vehicle_package.index');
    Route::get('vehicle_package/create', [Vehicle_PackageController::class, 'create'])->name('vehicle_package.create');
    Route::post('vehicle_package', [Vehicle_PackageController::class, 'store'])->name('vehicle_package.store');
    Route::get('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'edit'])->name('vehicle_package.edit');
    Route::put('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'update'])->name('vehicle_package.update');
    Route::delete('vehicle_package/{vehicle_packages}', [Vehicle_PackageController::class, 'destroy'])->name('vehicle_package.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // route::resource('homepage', HomepageController::class)->middleware('auth');
    Route::get('homepage/', [HomepageController::class, 'index'])->name('homepage.index');
    Route::get('booking/', [BookingController::class, 'index'])->name('booking.index');
});

require __DIR__ . '/auth.php';

// Route dari table setting buat landingpage
Route::get('/', function () {
    $settings = Setting::all();
    return view('landingpage.index', compact('settings'));
})->name('settings');