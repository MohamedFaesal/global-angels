<?php

namespace App\Http\Requests;

use App\Utils\WeightUnitUtil;

class AddTripRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'country_from' => 'required|integer|exists:countries,id',
            'country_to' => 'required|integer|exists:countries,id',
            'trip_date' => 'required|date|after:today',
            'arrival_date' => 'required|date|after:trip_date',
            'receive_requests_till' => 'required|date|before_or_equal:trip_date',
            'weight_unit' => 'required|string|in:' . implode(",", WeightUnitUtil::getTypes()),
            'available_weight' => 'required|numeric',
            'image' => 'required|string',
            'categories' => 'required|array',
            'categories.*' => 'required|integer|exists:categories,id',
        ];
    }
}
