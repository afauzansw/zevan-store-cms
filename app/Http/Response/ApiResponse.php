<?php

namespace App\Http\Response;


use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function success($data, $message): JsonResponse
    {
        return new JsonResponse([
            'meta' => [
                'status' => 'success',
                'message' => $message,
            ],

            'data' => $data,
        ], 200);
    }

    public static function error($message, $code = 400): JsonResponse
    {
        return new JsonResponse([
            'meta' => [
                'status' => 'error',
                'message' => $message,
            ],
        ], $code);
    }
}
