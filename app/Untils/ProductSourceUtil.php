<?php

namespace App\Utils;

class ProductSourceUtil
{
    const AMAZON = 'amazon';
    const BEST_BUY = 'best-buy';
    const NOON = 'noon';
    const APPLE = 'apple';

    public static function getTypes()
    {
        return [self::AMAZON, self::BEST_BUY, self::NOON, self::AMAZON];
    }
}