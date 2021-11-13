<?php

namespace Haritsyp\Kiriminaja\Tests\Unit;

use Haritsyp\Kiriminaja\Repository\KiriminajaLocation;
use Haritsyp\Kiriminaja\Tests\KiriminajaTestCase;

class KiriminajaLocationTest extends KiriminajaTestCase
{
    private $kiriminajaLocation;

    public function setUp(): void
    {
        parent::setUp();
        $this->kiriminajaLocation = new KiriminajaLocation($this->getApiKey(), false, $this->getBaseUrl());
    }

    public function testGetProvince()
    {
        $result = $this->kiriminajaLocation->getProvinces();
        $this->assertCount(34, $result->datas);
    }

    public function testGetCity()
    {
        $result = $this->kiriminajaLocation->getCities(5);
        $this->assertCount(5, $result->datas);
    }

    public function testGetSubdistrict()
    {
        $result = $this->kiriminajaLocation->getSubdistricts(501);
        $this->assertCount(14, $result->datas);
    }
}