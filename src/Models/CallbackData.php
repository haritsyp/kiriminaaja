<?php

namespace Haritsyp\Kiriminaja\Models;

class CallbackData
{
    protected $order_id;

    protected $date;

    protected $awb;

    protected $processed_at;

    protected $shipped_at;

    protected $finished_at;

    protected $returned_at;

    protected $rejected_at;

    protected $corrected_at;

    protected $return_finished_at;

    public function __construct(array $data)
    {
        foreach ($data as $key => $val) {
            if (property_exists(__CLASS__, $key)) {
                $this->$key = $val;
            }
        }
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
    public function getDate()
    {
        if ($this->processed_at) {
            return $this->processed_at;
        }

        if ($this->shipped_at) {
            return $this->shipped_at;
        }

        if ($this->finished_at) {
            return $this->finished_at;
        }

        if ($this->rejected_at) {
            return $this->rejected_at;
        }

        if ($this->returned_at) {
            return $this->returned_at;
        }

        if ($this->corrected_at) {
            return $this->corrected_at;
        }

        if ($this->return_finished_at) {
            return $this->return_finished_at;
        }

        return date('Y-m-d H:i:s');
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAwb()
    {
        return $this->awb;
    }

    /**
     * @param mixed $awb
     */
    public function setAwb($awb): void
    {
        $this->awb = $awb;
    }
}
