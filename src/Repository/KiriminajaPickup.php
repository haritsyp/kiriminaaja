<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;
use Haritsyp\Kiriminaja\Models\Pickup;

/**
 * Class KiriminajaPickup
 * @package Haritsyp\Kiriminaja\Repository
 */
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
     * @return mixed |null
     */
    public function create(Pickup $pickup)
    {
        return $this->post('api/mitra/v2/request_pickup', $pickup->toArray());
    }

    /**
     * @param string|null $pickup_number
     * @param string|null $type
     * @param string|null $status
     * @param string|null $period
     * @param string|null $schedule
     * @return mixed
     */
    public function getList(string $pickup_number = null, string $type = null, string $status = null, string $period = null, string $schedule = null)
    {
        return $this->post('api/mitra/list_pickup', array_filter([
            'type' => $type,
            'status' => $status,
            'period' => $period,
            'schedule' => $schedule,
            'pickup_number' => $pickup_number
        ]));
    }

    /**
     * @param string $pickup_number
     * @return mixed
     */
    public function cancel(string $pickup_number)
    {
        return $this->post('api/mitra/cancel_pickup', [
            'pickup_number' => $pickup_number
        ]);
    }

}