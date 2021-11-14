<?php

namespace Haritsyp\Kiriminaja\Tests\Unit;

use Haritsyp\Kiriminaja\Models\Package;
use Haritsyp\Kiriminaja\Models\Pickup;
use Haritsyp\Kiriminaja\Repository\KiriminajaLocation;
use Haritsyp\Kiriminaja\Repository\KiriminajaPickup;
use Haritsyp\Kiriminaja\Tests\KiriminajaTestCase;

class KiriminajaPickupTest extends KiriminajaTestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->kiriminajaLocation = new KiriminajaLocation($this->getApiKey(), false, $this->getBaseUrl());
    }

    public function testCreate()
    {
        $packages[] = new Package(
            'TEST-001',
            'Flag Test',
            '0895397730414',
            'Jl. Magelang KM 11',
            1997,
            55598,
            1,
            1,
            1,
            1,
            20000,
            65000,
            'jne',
            'REG',
            'Sertifikat',
            1,
            1
        );

        $pickup = new Pickup(
            $packages, 'Jl. Manukan Madya', '0895397730414', '1997', 'sidekat', '60185', '2021-11-6 14:00:00', 'Sidekat'
        );

        $kiriminajaPickup = new KiriminajaPickup($this->getApiKey(), false, $this->getBaseUrl());
        $kiriminajaPickup->create($pickup);
    }
}
