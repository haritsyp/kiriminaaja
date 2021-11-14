<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;

/**
 * Class KiriminajaLocation
 * @package Haritsyp\Kiriminaja\Repository
 */
class KiriminajaLocation extends Kiriminaja
{

    /**
     * KiriminajaLocation constructor.
     * @param $api_key
     * @param false $is_production
     * @param string $base_url\
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        parent::__construct($api_key, $is_production, $base_url);
    }

    /**
     * @return mixed
     */
    public function getProvinces()
    {
        return $this->post('api/mitra/province', []);
    }

    /**
     * @param int $province_id
     * @return mixed
     */
    public function getCities(int $province_id)
    {
        return $this->post('api/mitra/city', [
            'provinsi_id' => $province_id
        ]);
    }

    /**
     * @param int $city_id
     * @return mixed
     */
    public function getSubdistricts($city_id)
    {
        return $this->post('api/mitra/kecamatan', [
            'kabupaten_id' => $city_id
        ]);
    }
}
