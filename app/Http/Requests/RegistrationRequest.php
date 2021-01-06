<?php

namespace App\Http\Requests;

use App\Utils\UserSocialType;

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
            'social_token' => 'required',
            'phone' => 'required|string',
            'social_type' => 'required|string|in:' . implode(',', UserSocialType::getTypes())
        ];
    }
}
