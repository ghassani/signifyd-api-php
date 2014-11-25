<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class Recipient
{

    public $fullName;

    public $confirmationEmail;

    public $confirmationPhone;

    public $organization;

    public $deliveryAddress;

    /**
     * @return mixed
     */
    public function getConfirmationEmail()
    {
        return $this->confirmationEmail;
    }

    /**
     * @param mixed $confirmationEmail
     */
    public function setConfirmationEmail($confirmationEmail)
    {
        $this->confirmationEmail = $confirmationEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirmationPhone()
    {
        return $this->confirmationPhone;
    }

    /**
     * @param mixed $confirmationPhone
     */
    public function setConfirmationPhone($confirmationPhone)
    {
        $this->confirmationPhone = $confirmationPhone;
        return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress(Address $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }


}