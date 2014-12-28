<?php

namespace IndependentReserve\Object;

class LimitOrder extends AbstractTimestampedObject
{
    /**
     * Unique identifier of the order.
     * @return string
     */
    public function getOrderGuid()
    {
        return $this->object->OrderGuid;
    }

    /**
     * Order limit price in secondary currency.
     * @return double
     */
    public function getPrice()
    {
        return $this->object->Price;
    }

    /**
     * Primary currency of order.
     * @return string
     */
    public function getPrimaryCurrencyCode()
    {
        return $this->object->PrimaryCurrencyCode;
    }

    /**
     * The amount of funds reserved in your account by this order.
     * @return double
     */
    public function getReservedAmount()
    {
        return $this->object->ReservedAmount;
    }
}
