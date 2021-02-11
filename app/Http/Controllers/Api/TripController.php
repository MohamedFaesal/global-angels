<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTripRequest;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;

/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 */
class TripController extends Controller
{
    public function store(AddTripRequest $addTripRequest)
    {
        $data = $addTripRequest->validated();
        if (!is_base64($data['image'])) {
            throw new \Exception('invalid image sent', 400);
        }
        $file = base64_decode($data['image']);
        $safeName = str_random(10) . '-' . time() .'.'.'png';
        $destinationPath = public_path() . '/uploads/trips/';
        $success = file_put_contents($destinationPath . $safeName, $file);
        $data['image'] = $safeName;
        $categories = $data['categories'];
        unset($data['categories']);
        $data["user_id"] = auth()->id();

        $trip = Trip::create($data);
        $categoryData = [];
        foreach ($categories as $categoryId) {
            $categoryData[] = [
                'category_id' => $categoryId,
                'trip_id' => $trip->id
            ];

        }
        DB::table('trip_categories')->insert($categoryData);
        dd($trip);
        return $this->success();
    }
}
