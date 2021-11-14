<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;

/**
 * Class KiriminajaTracking
 * @package Haritsyp\Kiriminaja\Repository
 */
class KiriminajaTracking extends Kiriminaja
{

    /**
     * KiriminajaTracking constructor.
     * @param $api_key
     * @param false $is_production
     * @param string $base_url
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        parent::__construct($api_key, $is_production, $base_url);
    }

    /**
     * @param string $order_id
     * @return mixed|void
     */
    public function get(string $order_id)
    {
        return $this->post('', [
            'order_id' => $order_id
        ]);
    }
}