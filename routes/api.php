<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Transaction\TransactionController;
use App\Http\Controllers\Api\Product\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('transactions')->group(function () {
    Route::post('checkout', [TransactionController::class, 'checkout']);
    Route::get('track/{number}', [TransactionController::class, 'track']);
});

Route::get('products', [ProductController::class, 'get']);
