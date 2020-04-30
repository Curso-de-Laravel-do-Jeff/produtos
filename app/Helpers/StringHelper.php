<?php

namespace App\Helpers;

class StringHelper
{
    public static function formatMoney($money)
    {
        return number_format((float) $money, 2, ',', '.');
    }
}
