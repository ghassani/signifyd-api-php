<?php

namespace Spliced\Signifyd\Model;

use Spliced\Signifyd\Client;

class UserAccount
{
    public $email;

    public $username;

    public $phone;

    public $createdDate;

    public $accountNumber;

    public $lastOrderId;

    public $aggregateOrderCount;

    public $aggregateOrderDollars;

    public $lastUpdateData;

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAggregateOrderCount()
    {
        return $this->aggregateOrderCount;
    }

    /**
     * @param mixed $aggregateOrderCount
     */
    public function setAggregateOrderCount($aggregateOrderCount)
    {
        $this->aggregateOrderCount = $aggregateOrderCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAggregateOrderDollars()
    {
        return $this->aggregateOrderDollars;
    }

    /**
     * @param mixed $aggregateOrderDollars
     */
    public function setAggregateOrderDollars($aggregateOrderDollars)
    {
        $this->aggregateOrderDollars = $aggregateOrderDollars;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    /**
     * @param mixed $lastOrderId
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastUpdateData()
    {
        return $this->lastUpdateData;
    }

    /**
     * @param mixed $lastUpdateData
     */
    public function setLastUpdateData($lastUpdateData)
    {
        $this->lastUpdateData = $lastUpdateData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }


}