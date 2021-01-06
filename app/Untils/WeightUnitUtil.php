<?php

namespace App\Utils;

class WeightUnitUtil
{
    const GRAM = 'g';
    const KILO_GRAM = 'kg';
    const POUNDS = 'lbs';

    public static function getTypes()
    {
        return [
            self::GRAM => self::GRAM,
            self::KILO_GRAM => self::KILO_GRAM,
            self::POUNDS => self::POUNDS,
        ];
    }
}