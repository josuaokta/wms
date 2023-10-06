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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('admin/user-management', [App\Http\Controllers\UserManagementController::class, 'index'])->name('user-management');
Route::get('admin/product-list', [App\Http\Controllers\ProductController::class, 'index'])->name('product-list');
Route::get('admin/design', [App\Http\Controllers\DesignController::class, 'index'])->name('design');
Route::get('admin/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location');

Route::controller(App\Http\Controllers\ReceivingController::class)->group(function () {
    Route::get('admin/receiving', 'index')->name('receiving');
    Route::get('admin/receiving/labeling','labeling')->name('labeling');
    Route::get('admin/receiving/report','report')->name('receiving-report');
});


Route::controller(App\Http\Controllers\DeliveryController::class)->group(function () {
    Route::get('admin/delivery', 'index')->name('delivery');
    Route::get('admin/delivery/report', 'report')->name('delivery-report');
});

Route::controller(App\Http\Controllers\InventoryController::class)->group(function () {
    Route::get('admin/inventory', 'index')->name('inventory');
    Route::get('admin/inventory/moved', 'moved')->name('inventory-moved');
    Route::get('admin/inventory/report', 'report')->name('inventory-report');
});
