<?php

namespace Haritsyp\Kiriminaja\Repository;

use Haritsyp\Kiriminaja\Kiriminaja;
use Haritsyp\Kiriminaja\Models\Callback;

class KiriminajaCallback extends Kiriminaja
{

    /**
     * KiriminajaCallback constructor.
     * @param $api_key
     * @param false $is_production
     * @param string $base_url
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        parent::__construct($api_key, $is_production, $base_url);
    }


    public function handler()
    {
        $request = file_get_contents("php://input");

        return new Callback(json_decode($request, true));
    }
}