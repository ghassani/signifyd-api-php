<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class Purchase
{
    public $browserIpAddress;

    public $orderId;

    public $createdAt;

    public $paymentGateway;

    public $currency;

    public $avsResponseCode;

    public $cvvResponseCode;

    public $orderChannel;

    public $receivedBy;

    public $totalPrice;

    public $products = array();

    /**
     * @return mixed
     */
    public function getAvsResponseCode()
    {
        return $this->avsResponseCode;
    }

    /**
     * @param mixed $avsResponseCode
     */
    public function setAvsResponseCode($avsResponseCode)
    {
        $this->avsResponseCode = $avsResponseCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserIpAddress()
    {
        return $this->browserIpAddress;
    }

    /**
     * @param mixed $browserIpAddress
     */
    public function setBrowserIpAddress($browserIpAddress)
    {
        $this->browserIpAddress = $browserIpAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvvResponseCode()
    {
        return $this->cvvResponseCode;
    }

    /**
     * @param mixed $cvvResponseCode
     */
    public function setCvvResponseCode($cvvResponseCode)
    {
        $this->cvvResponseCode = $cvvResponseCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderChannel()
    {
        return $this->orderChannel;
    }

    /**
     * @param mixed $orderChannel
     */
    public function setOrderChannel($orderChannel)
    {
        $this->orderChannel = $orderChannel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentGateway()
    {
        return $this->paymentGateway;
    }

    /**
     * @param mixed $paymentGateway
     */
    public function setPaymentGateway($paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
        return $this;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param array $products
     */
    public function setProducts(array $products = array())
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivedBy()
    {
        return $this->receivedBy;
    }

    /**
     * @param mixed $receivedBy
     */
    public function setReceivedBy($receivedBy)
    {
        $this->receivedBy = $receivedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }


}