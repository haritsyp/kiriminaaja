<?php

namespace Haritsyp\Kiriminaja\Tests;

use PHPUnit\Framework\TestCase;

class KiriminajaTestCase extends TestCase
{

    protected $api_key;

    protected $base_url;

    public function setUp(): void
    {

        $this->base_url = 'https://tdev.kiriminaja.com/';

        $this->api_key = '';

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key
     */
    public function setApiKey(string $api_key): void
    {
        $this->api_key = $api_key;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     */
    public function setBaseUrl(string $base_url): void
    {
        $this->base_url = $base_url;
    }
}