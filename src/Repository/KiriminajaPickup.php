<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;
use Haritsyp\Kiriminaja\Models\Pickup;

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

    /**
     * @return mixed
     */
    public function getSchedule()
    {
        return $this->post('api/mitra/v2/schedules', []);
    }

    /**
     * @param Pickup $pickup
     * @return |null
     */
    public function create(Pickup $pickup)
    {
        return $this->post('api/mitra/v2/request_pickup', $pickup->toArray());
    }
}