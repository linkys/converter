<?php

namespace App\Provides\Currencies;

class Rate {

    public static function get(string $base, float $amount, Convertable $converter = null) : array
    {
        $converter = $converter ?: new ProviderOne;

        return $converter->rates($base, $amount);
    }

}