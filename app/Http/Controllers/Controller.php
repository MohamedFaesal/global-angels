<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [], $message = "success")
    {
        $data = is_array($data) ? $data : $data->toArray();
        return response()->json([
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public function failed($message = null, $status = 400, $data = [])
    {
        $data = is_array($data) ? $data : $data->toArray();
        $message = $message ?? "something goes wrong";
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $status);
    }
}
