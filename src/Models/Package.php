<?php

namespace Haritsyp\Kiriminaja\Models;

/**
 * Class Package
 * @package Haritsyp\Kiriminaja\Models
 */
class Package
{

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $destination_name;

    /**
     * @var string
     */
    protected $destination_phone;

    /**
     * @var string
     */
    protected $destination_address;

    /**
     * @var int
     */
    protected $destination_kecamatan_id;

    /**
     * @var int
     */
    protected $destination_zipcode;

    /**
     * @var int
     */
    protected $weight;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $length;

    /**
     * @var int
     */
    protected $item_value;

    /**
     * @var int
     */
    protected $shipping_cost;

    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $service_type;

    /**
     * @var string
     */
    protected $item_name;

    /**
     * @var int
     */
    protected $package_type_id;

    /**
     * @var int
     */
    protected $add_cost;

    /**
     * @var int
     */
    protected $cod;

    /**
     * @var mixed | null
     */
    protected $insurance_amount;

    /**
     * @var int
     */
    protected $qty;

    /**
     * Package constructor.
     * @param $order_id
     * @param $destination_name
     * @param $destination_phone
     * @param $destination_address
     * @param $destination_kecamatan_id
     * @param $destination_zipcode
     * @param $weight
     * @param $width
     * @param $height
     * @param $length
     * @param $item_value
     * @param $shipping_cost
     * @param $service
     * @param $service_type
     * @param $item_name
     * @param $package_type_id
     * @param int $qty
     * @param int $add_cost
     * @param int $cod
     * @param int $insurance_amount
     */
    public function __construct($order_id, $destination_name, $destination_phone, $destination_address, $destination_kecamatan_id, $destination_zipcode, $weight, $width, $height, $length, $item_value, $shipping_cost, $service, $service_type, $item_name, $package_type_id, $qty = 1, $add_cost = 0, $cod = 0, $insurance_amount = 0)
    {
        $this->order_id = $order_id;
        $this->destination_name = $destination_name;
        $this->destination_phone = $destination_phone;
        $this->destination_address = $destination_address;
        $this->destination_kecamatan_id = $destination_kecamatan_id;
        $this->destination_zipcode = $destination_zipcode;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->item_value = $item_value;
        $this->shipping_cost = $shipping_cost;
        $this->service = $service;
        $this->service_type = $service_type;
        $this->item_name = $item_name;
        $this->package_type_id = $package_type_id;
        $this->cod = $cod;
        $this->add_cost = $add_cost;
        $this->insurance_amount = $insurance_amount;
        $this->qty = $qty;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getDestinationName()
    {
        return $this->destination_name;
    }

    /**
     * @param mixed $destination_name
     */
    public function setDestinationName($destination_name): void
    {
        $this->destination_name = $destination_name;
    }

    /**
     * @return mixed
     */
    public function getDestinationPhone()
    {
        return $this->destination_phone;
    }

    /**
     * @param mixed $destination_phone
     */
    public function setDestinationPhone($destination_phone): void
    {
        $this->destination_phone = $destination_phone;
    }

    /**
     * @return mixed
     */
    public function getDestinationAddress()
    {
        return $this->destination_address;
    }

    /**
     * @param mixed $destination_address
     */
    public function setDestinationAddress($destination_address): void
    {
        $this->destination_address = $destination_address;
    }

    /**
     * @return mixed
     */
    public function getDestinationKecamatanId()
    {
        return $this->destination_kecamatan_id;
    }

    /**
     * @param mixed $destination_kecamatan_id
     */
    public function setDestinationKecamatanId($destination_kecamatan_id): void
    {
        $this->destination_kecamatan_id = $destination_kecamatan_id;
    }

    /**
     * @return mixed
     */
    public function getDestinationZipcode()
    {
        return $this->destination_zipcode;
    }

    /**
     * @param mixed $destination_zipcode
     */
    public function setDestinationZipcode($destination_zipcode): void
    {
        $this->destination_zipcode = $destination_zipcode;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length): void
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getItemValue()
    {
        return $this->item_value;
    }

    /**
     * @param mixed $item_value
     */
    public function setItemValue($item_value): void
    {
        $this->item_value = $item_value;
    }

    /**
     * @return mixed
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    /**
     * @param mixed $shipping_cost
     */
    public function setShippingCost($shipping_cost): void
    {
        $this->shipping_cost = $shipping_cost;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->service_type;
    }

    /**
     * @param mixed $service_type
     */
    public function setServiceType($service_type): void
    {
        $this->service_type = $service_type;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->item_name;
    }

    /**
     * @param mixed $item_name
     */
    public function setItemName($item_name): void
    {
        $this->item_name = $item_name;
    }

    /**
     * @return mixed
     */
    public function getPackageTypeId()
    {
        return $this->package_type_id;
    }

    /**
     * @param mixed $package_type_id
     */
    public function setPackageTypeId($package_type_id): void
    {
        $this->package_type_id = $package_type_id;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return int
     */
    public function getAddCost(): int
    {
        return $this->add_cost;
    }

    /**
     * @param int $add_cost
     */
    public function setAddCost(int $add_cost): void
    {
        $this->add_cost = $add_cost;
    }

    /**
     * @return int
     */
    public function getCod(): int
    {
        return $this->cod;
    }

    /**
     * @param int $cod
     */
    public function setCod(int $cod): void
    {
        $this->cod = $cod;
    }

    /**
     * @return mixed|null
     */
    public function getInsuranceAmount()
    {
        return $this->insurance_amount;
    }

    /**
     * @param mixed|null $insurance_amount
     */
    public function setInsuranceAmount( $insurance_amount): void
    {
        $this->insurance_amount = $insurance_amount;
    }
}