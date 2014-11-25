<?php

namespace Spliced\Signifyd\Request;

use Spliced\Signifyd\Client;

interface RequestInterface
{

    /**
     * @return Client|null
     */
    public function getClient();

    /**
     * @param Client $client
     * @return self
     */
    public function setClient(Client $client);

    /**
     * send
     *
     * Sends the request from the request object itself instead of
     * calling to the client. Must have a client object reference
     * in the request object or it throws a LogicException
     *
     * @return Spliced\Signifyd\Response\ResponseInterface
     */
    public function send();

    /**
     * getUri
     *
     * Returns the URI for the request, appended
     * to the clients endpoint.
     *
     * @return string
     */
    public function getUri();

    /**
     * toJson
     *
     * Returns the request object as a JSON object
     *
     * @return string
     */
    public function toJson();

    /**
     * toJson
     *
     * Returns the request object as an array
     *
     * @return string
     */
    public function toArray();
}
