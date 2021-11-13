<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;

class KiriminajaPrice extends Kiriminaja
{

    /**
     * KiriminajaPrice constructor.
     * @param $api_key
     * @param false $is_production
     * @param string $base_url
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        parent::__construct($api_key, $is_production, $base_url);
    }

    /**
     * @param $origin
     * @param $destination
     * @param $weight
     * @param array $courier
     * @return mixed
     */
    public function getRate($origin, $destination, $weight, $courier = [])
    {
        return $this->post('api/mitra/shipping_price', array_filter([
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
        ]));
    }
}