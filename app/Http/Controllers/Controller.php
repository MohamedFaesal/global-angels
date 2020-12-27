<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [], $message = "success")
    {
        if (!is_array($data)) {
            if ($data instanceof JsonResource) {
                $data = $data->toArray(request());
            } else {
                $data = $data->toArray();
            }
        }

        return response()->json([
            'status' => 200,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public function failed($message = null, $status = 400, $data = [])
    {
        $data = is_array($data) ? $data : $data->toArray();
        $message = $message ?? "something goes wrong";
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }
}
