<?php

namespace Haritsyp\Kiriminaja\Models;

/**
 * Class Callback
 * @package Haritsyp\Kiriminaja\Models
 */
class Callback
{
    /**
     * @var string
     */
    protected $method;

    /**
     * @var CallbackData[]
     */
    protected $data;

    /**
     * Callback constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $val) {
            if (property_exists(__CLASS__, $key)) {
                if (is_array($val)) {
                    foreach ($val as $item) {
                        $arr[] = new CallbackData($item);
                    }
                    $this->$key = $arr ?? [];
                    continue;
                }
                $this->$key = $val;
            }
        }
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return CallbackData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CallbackData[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
