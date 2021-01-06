<?php

namespace App\Http\Requests;

use App\Utils\WeightUnitUtil;

class AddProductRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'link' => 'required|url',
            'name' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'quantity' => 'required|integer',
            'country_from' => 'required|integer|exists:countries,id',
            'country_to' => 'required|integer|exists:countries,id',
            'weight' => 'required|numeric',
            'weight_unit' => 'required|string|in:' . implode(",", WeightUnitUtil::getTypes()),
            'price' => 'required|numeric',
            'currency' => 'required|string|exists:countries,currency',
            'delivery_date' => 'required|date|after:today',
            'order_before' => 'required|date|after:today',
            'description' => 'required|string',
            'images' => 'required|array|max:5',
            'images.*' => 'required|string',
            'can_fit' => 'required|array',
            'can_fit.*' => 'required|integer|exists:shipment_fits,id',
            'trip_id' => 'nullable|integer',
        ];
    }
}
