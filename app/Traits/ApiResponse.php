<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiResponse {

    public function successResponse($data, $message = 'success', $code = Response::HTTP_OK) {
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $code);
    }

    public function errorResponse($data, $message='', $error = 'INTERNAL_SERVER_ERROR', $code = Response::HTTP_INTERNAL_SERVER_ERROR) {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'error' => $error
        ], $code);
    }

}
