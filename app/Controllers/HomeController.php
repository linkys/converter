<?php

namespace App\Controllers;

use App\Provides\Currencies\ProviderOne;
use App\Provides\Currencies\Rate;

class HomeController {

    public function show()
    {
        return view('home');
    }

    public function convert()
    {
        $amount = request('amount');

        if(!empty($amount) && is_numeric($amount)) {

            return response([
                'status' => true,
                'data' => Rate::get('USD', $amount, new ProviderOne)
            ]);
        }

        return response(['status' => false]);
    }
}