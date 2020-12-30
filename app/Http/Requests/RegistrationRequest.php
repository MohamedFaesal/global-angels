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
            'phone' => 'required|string|unique:users',
            'age' => 'required|integer',
            'country_id' => 'required|integer',
            'state_id' => 'required|integer',
            'user_type' => 'required|string',
            'gender' => 'required|string',
            'name' => 'nullable|string',
            'email' => 'nullable|string'
        ];
    }
}
