<?php

namespace Spliced\Signifyd\Response;

use Guzzle\Http\Message\Response as HttpResponse;

class Response
{

    protected $httpResponse;

    protected $response = array();


    public function __construct(HttpResponse $response)
    {
        $this->httpResponse = $response;
        $this->response = json_decode($response->getBody(true), true);
    }

    public function isSuccess()
    {
        if (!in_array($this->httpResponse->getStatusCode(), array(200,201))) {
            return false;
        }

        if (isset($this->response['errors']) && count($this->response['errors'])) {
            return false;
        }

        return true;
    }

    public function isError()
    {
        return !$this->isSuccess();
    }

    public function getMessages()
    {
        if (isset($this->response['errors'])) {
            return $this->response['errors'];
        }

        return false;
    }

    public function getRequestBody()
    {
        return isset($this->response['requestBody']) ? $this->response['requestBody'] : null;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getHttpResponse()
    {
        return $this->httpResponse;
    }
}
