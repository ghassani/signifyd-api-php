<?php

namespace Spliced\Signifyd\Request;

use Spliced\Signifyd\Client;

abstract class AbstractRequest implements RequestInterface
{

    protected $client;

    /**
     * @var array
     */
    protected $data = array();

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * {@inheritDoc}
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function send()
    {
        if (!$this->client instanceof Client) {
            throw new \LogicException('When sending a request from the request object, a client must first be set in the request. To avoid this, use the factory method Client::createRequest');
        }

        $this->client->send($this);
    }

    /**
     * {@inheritDoc}
     */
    public function toJson()
    {
        $return = array();

        foreach ($this->toArray() as $k => $v) {
            if ($v) {
                $return[$k] = $v;
            }
        }
        return json_encode($return);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->data;
    }

    /**
     * @param $param
     * @param $value
     * @return $this
     */
    protected function set($param, $value)
    {
        $this->data[$param] = $value;
        return $this;
    }

    /**
     * @param $param
     * @return bool
     */
    protected function get($param)
    {
        return isset($this->data[$param]) ? $this->data[$param] : false;
    }

    /**
     * @{inheritDoc}
     */
    public function getRequestMethod()
    {
        return static::REQUEST_TYPE_GET;
    }
}