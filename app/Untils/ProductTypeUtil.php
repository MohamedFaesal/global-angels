<?php

namespace App\Utils;

class ProductTypeUtil
{
    const ONLINE_STORE = 'online-store';
    const PRE_ORDERS = 'pre-orders';

    public static function getTypes()
    {
        return [
            self::ONLINE_STORE => self::ONLINE_STORE,
            self::PRE_ORDERS => self::PRE_ORDERS
        ];
    }
}