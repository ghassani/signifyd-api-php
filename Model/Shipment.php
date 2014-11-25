<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class Shipment
{
    public $shipper;

    public $shippingMethod;

    public $shippingPrice;

    public $trackingNumber;

    /**
     * @return mixed
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param mixed $shipper
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param mixed $shippingMethod
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }

    /**
     * @param mixed $shippingPrice
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param mixed $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }



}