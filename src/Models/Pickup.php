<?php

namespace Haritsyp\Kiriminaja\Models;

/**
 * Class Pickup
 * @package Haritsyp\Kiriminaja\Models
 */
class Pickup
{

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var int
     */
    protected $kecamatan_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $zip_code;

    /**
     * @var string
     */
    protected $schedule;

    /**
     * @var string
     */
    protected $platform_name;

    /**
     * @var Package[]
     */
    protected $packages;

    /**
     * Pickup constructor.
     * @param Package[] $packages
     * @param string $address
     * @param string $phone
     * @param int $kecamatan_id
     * @param string $name
     * @param string $zip_code
     * @param string $schedule
     * @param string $platform_name
     */
    public function __construct(array $packages, string $address, string $phone, int $kecamatan_id, string $name, string $zip_code, string $schedule, string $platform_name)
    {
        $this->address = $address;
        $this->phone = $phone;
        $this->kecamatan_id = $kecamatan_id;
        $this->name = $name;
        $this->zip_code = $zip_code;
        $this->schedule = $schedule;
        $this->platform_name = $platform_name;
        $this->packages = $packages;
    }

    public function toArray()
    {
        return [
            'address' => $this->getAddress(),
            'phone' => $this->getPhone(),
            'kecamatan_id' => $this->getKecamatanId(),
            'packages' => $this->getPackages(),
            'name' => $this->getName(),
            'zipcode' => $this->getZipCode(),
            'schedule' => $this->getSchedule(),
            'platform_name' => $this->getPlatformName()
        ];
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getKecamatanId(): int
    {
        return $this->kecamatan_id;
    }

    /**
     * @param int $kecamatan_id
     */
    public function setKecamatanId(int $kecamatan_id): void
    {
        $this->kecamatan_id = $kecamatan_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zip_code;
    }

    /**
     * @param string $zip_code
     */
    public function setZipCode(string $zip_code): void
    {
        $this->zip_code = $zip_code;
    }

    /**
     * @return string
     */
    public function getSchedule(): string
    {
        return $this->schedule;
    }

    /**
     * @param string $schedule
     */
    public function setSchedule(string $schedule): void
    {
        $this->schedule = $schedule;
    }

    /**
     * @return string
     */
    public function getPlatformName(): string
    {
        return $this->platform_name;
    }

    /**
     * @param string $platform_name
     */
    public function setPlatformName(string $platform_name): void
    {
        $this->platform_name = $platform_name;
    }

    /**
     * @return array
     */
    public function getPackages(): array
    {
        $packageArr = [];
        foreach ($this->packages as $packageItem) {
            $packageArr[] = $packageItem->toArray();
        }
        return $packageArr;
    }

    /**
     * @param Package[] $packages
     */
    public function setPackages(array $packages): void
    {
        $this->packages = $packages;
    }

}