<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class Product
{
    public $itemId;

    public $itemName;

    public $itemUrl;

    public $itemImage;

    public $itemQuantity;

    public $itemPrice;

    public $itemWeight;

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemImage()
    {
        return $this->itemImage;
    }

    /**
     * @param mixed $itemImage
     */
    public function setItemImage($itemImage)
    {
        $this->itemImage = $itemImage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    /**
     * @param mixed $itemQuantity
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemUrl()
    {
        return $this->itemUrl;
    }

    /**
     * @param mixed $itemUrl
     */
    public function setItemUrl($itemUrl)
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemWeight()
    {
        return $this->itemWeight;
    }

    /**
     * @param mixed $itemWeight
     */
    public function setItemWeight($itemWeight)
    {
        $this->itemWeight = $itemWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }


}