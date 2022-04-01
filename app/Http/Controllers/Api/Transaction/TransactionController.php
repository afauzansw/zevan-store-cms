<?php

namespace App\Http\Controllers\Api\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Response\ApiResponse;
use App\Models\Transaction;
use Illuminate\Http\JsonResponse;
use Exception;

class TransactionController extends Controller
{
    /**
     * Tracking the transaction.
     */
    public function track($number): JsonResponse
    {
        try {
            $transaction = Transaction::query()->where('number', $number);

            return ApiResponse::success($transaction, "Success track");
        } catch (Exception $exception) {
            return ApiResponse::error($exception);
        }
    }

    /**
     * API for creating a new transaction.
     */
    public function checkout(CheckoutRequest $request): JsonResponse
    {
        try {
            $data = $request->validationData();
            $transaction = Transaction::query()->create(array_merge($data, ['status' => Transaction::status['pending']]));

            return ApiResponse::success($transaction, "Success checkout");
        } catch (Exception $exception) {
            return ApiResponse::error($exception);
        }
    }
}
