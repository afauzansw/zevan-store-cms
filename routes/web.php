<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Transaction\TransactionController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

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

Route::get('/', function () {
    return redirect(\route('login'));
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('pages.dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('products', ProductController::class);

    Route::resource('transactions', TransactionController::class);
    Route::put('transactions/{id}/status', [TransactionController::class, 'changeStatus'])->name('transactions.status');

});
