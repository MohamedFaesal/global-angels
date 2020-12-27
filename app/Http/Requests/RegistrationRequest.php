<?php

namespace App\Http\Requests;

class RegistrationRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'facebook_token' => 'required',
            'phone' => 'required',
            'age' => 'required|integer',
            'country_id' => 'required|string',
            'state_id' => 'required|string',
            'user_type' => 'required|string',
            'gender' => 'required|string',
            'name' => 'nullable|string',
            'email' => 'nullable|string'
        ];
    }
}
