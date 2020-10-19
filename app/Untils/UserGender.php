<?php

namespace App\Utils;

class UserGender
{
    const MALE = 'male';
    const FEMALE = 'female';
    public static function getGenders()
    {
        return [
            self::MALE => self::MALE,
            self::FEMALE => self::FEMALE,
        ];
    }
}