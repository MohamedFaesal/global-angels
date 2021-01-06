<?php

namespace App\Http\Requests;

class LoginRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'social_token' => 'required|string',
        ];
    }
}
