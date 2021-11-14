<?php

namespace Haritsyp\Kiriminaja;

use Haritsyp\Kiriminaja\Helpers\ApiRequester;

abstract class Kiriminaja
{
    /** Use ApiRequesterTrait */
    use ApiRequester;

    private $api_key;

    private $is_production;

    private $base_url;

    /**
     * Kiriminaja constructor.
     * @param string $api_key
     * @param bool $is_production
     * @param string $base_url
     */
    public function __construct($api_key, $is_production = false, $base_url = 'https://tdev.kiriminaja.com/')
    {
        $this->api_key = $api_key;
        $this->is_production = $is_production;
        $this->base_url = $base_url;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * @return bool
     */
    public function isIsProduction()
    {
        return $this->is_production;
    }

    /**
     * @param bool $is_production
     */
    public function setIsProduction($is_production)
    {
        $this->is_production = $is_production;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     */
    public function setBaseUrl($base_url)
    {
        $this->base_url = $base_url;
    }
}
