<?php

namespace App\Utils;

class UserSocialType
{
    const FACEBOOK = 'facebook';
    const APPLE = 'apple';
    public static function getTypes()
    {
        return [
            self::FACEBOOK => self::FACEBOOK,
            self::APPLE => self::APPLE,
        ];
    }
}