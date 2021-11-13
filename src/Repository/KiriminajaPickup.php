<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;

class KiriminajaPickup extends Kiriminaja
{
    /**
     * KiriminajaPickup constructor.
     * @param $api_key
     * @param false $is_production
     * @param string $base_url
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        parent::__construct($api_key, $is_production, $base_url);
    }

    public function getSchedule()
    {
        $this->post('api/mitra/v2/schedules', []);
    }
}