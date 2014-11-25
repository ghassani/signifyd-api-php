<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class Seller
{
    public $name;

    public $domain;

    public $shipFromAddress;

    public $corporateAddress;

    /**
     * @return mixed
     */
    public function getCorporateAddress()
    {
        return $this->corporateAddress;
    }

    /**
     * @param mixed $corporateAddress
     */
    public function setCorporateAddress(Address $corporateAddress = null)
    {
        $this->corporateAddress = $corporateAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipFromAddress()
    {
        return $this->shipFromAddress;
    }

    /**
     * @param mixed $shipFromAddress
     */
    public function setShipFromAddress(Address $shipFromAddress = null)
    {
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }


}