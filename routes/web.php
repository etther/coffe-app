<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SigninController;
use App\Models\Order;

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
    return view('home');
});

Route::get('/product', [CoffeController::class, 'index']);

Route::get('/history', function () {
    return view('history');
});

Route::get('/login', [SigninController::class, 'ShowLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [SigninController::class, 'authenticate']);
Route::get('/dashboard', [OrderController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/orders/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/orders/{id}/edit', [OrderController::class, 'editOrder'])->middleware('auth')->name('order.edit');
Route::put('/orders/{id}/update', [OrderController::class, 'update'])->middleware('auth')->name('order.update');
Route::get('/orders/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');

Route::post('/logout', [SigninController::class, 'logout'])->name('logout');
