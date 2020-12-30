<?php

namespace App\Utils;

class UserType
{
    const SHIPPER_OR_SHOPPER = 'shipper_or_shopper';
    const TRAVELLING_ANGEL = 'travelling_angel';
    const ADMIN = 'admin';

    public static function getTypes()
    {
        return [
            self::SHIPPER_OR_SHOPPER => self::SHIPPER_OR_SHOPPER,
            self::TRAVELLING_ANGEL => self::TRAVELLING_ANGEL,
            self::ADMIN => self::ADMIN,
        ];
    }
}