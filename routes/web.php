<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('layouts.app');
//});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('pages.dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    Route::get('products', function () {
        return view('pages.products');
    })->name('products');
    Route::get('transactions', function () {
        return view('pages.products');
    })->name('transactions');
});
