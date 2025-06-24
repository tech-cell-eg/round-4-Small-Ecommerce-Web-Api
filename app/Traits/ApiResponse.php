<?php

namespace App\Traits;

class ApiResponse
{
    static function sendResponse($data = null, $msg = null, $code = 200)
    {
        $response = [
            'status'    => $code,
            'msg'       => $msg,
            'data'      => $data,
        ];

        return response()->json($response, $code);
    }
}
