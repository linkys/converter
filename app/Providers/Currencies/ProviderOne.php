<?php

namespace App\Provides\Currencies;

class ProviderOne implements Convertable {

    protected $data = [];

    // in this case we have very similar methods because APIs responses have same format
    public function rates(string $base, float $amount) : array
    {
        if(!empty($base) && !empty($amount)) {
            $req_url = 'https://api.exchangerate-api.com/v4/latest/' . $base;
            $response_json = file_get_contents($req_url);

            if (false !== $response_json) {
                try {
                    $response_object = json_decode($response_json, JSON_OBJECT_AS_ARRAY);
                    unset($response_object['rates'][$base]);

                    $this->data = array_map(function ($item) use ($amount) {
                        return round(($amount * $item), 2);
                    }, $response_object['rates']);

                } catch (\Exception $e) {
                    die($e->getMessage());
                }
            }
        }

        return $this->data;
    }

}