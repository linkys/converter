<?php

namespace App\Provides\Currencies;

interface Convertable {

    public function rates(string $base, float $amount) : array;

}