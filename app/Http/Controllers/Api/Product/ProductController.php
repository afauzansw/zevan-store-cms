<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Response\ApiResponse;
use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the product.
     */
    public function get(): JsonResponse
    {
        try {
            $product = Product::query()->get();
            return ApiResponse::success($product, 'Success get products');
        } catch (Exception $exception) {
            return ApiResponse::error($exception);
        }
    }

    /**
     * Display a listing of the recommendation product.
     */
    public function recommendation(): JsonResponse
    {
        try {
            $product = Product::query()->where('type', $type)->get();
            return ApiResponse::success($product, 'Success get recommendation products');
        } catch (Exception $exception) {
            return ApiResponse::error($exception);
        }
    }

}
