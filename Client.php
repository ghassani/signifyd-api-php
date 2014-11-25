<?php
/*
* This file is part of the Spliced Signifyd PHP API package.
*
* (c) Spliced Media <http://www.splicedmedia.com/>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Spliced\Signifyd;

use Spliced\Signifyd\Request\RequestInterface;
use Guzzle\Http\Client as HttpClient;
use GuzzleHttp\Exception\ServerException as HttpServerException;

/**
 *
 */
class Client
{

    /** @var string base url endpoint to construct requests off - sprintf replaced client id*/
    protected $endpoint = 'https://api.signifyd.com/v2/';

    /** @var string $key */
    protected $key;

    /** @var HttpClient $httpClient */
    protected $httpClient;

    /**
     * Constructor
     *
     * @param string $key - Your API Key
     * @param string $endpoint - If set, overrides default endpoint
     */
    public function __construct($key, $endpoint = null)
    {
        $this->key = $key;

        if (!is_null($endpoint)) {
            $this->endpoint = $endpoint;
        }

        $this->httpClient = new HttpClient($this->endpoint, array());
    }

    /**
     * getKey
     *
     * Returns the Client Secret Key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * getEndpoint
     *
     * Returns the endpoint for the current client instance
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * createRequest
     *
     * Factory method to construct a request
     *
     * @param string $requestType
     * @param array $arguments - These will be passed to the request contructor
     */
    public function createRequest($requestType, array $arguments = array())
    {
        $fqClassRequest = '\\Spliced\\Signifyd\\Request\\'.$requestType;

        if (!class_exists($fqClassRequest)) {
            throw new \InvalidArgumentException(sprintf('Could Not Create Request %s - Class Not Found', $requestType));
        }

        $reflector = new \ReflectionClass($fqClassRequest);

        if (!$reflector->implementsInterface('\\Spliced\\Signifyd\\Request\\RequestInterface')) {
            throw \RuntimeException(sprintf('Request Class %s Must Implement %s',
                $fqClassRequest,
                '\\Spliced\\Signifyd\\Request\\RequestInterface'
            ));
        }

        $request = $reflector->newInstanceArgs($arguments);

        $request->setClient($this);

        return $request;
    }

    /**
     * @param Request\RequestInterface $request
     * @return Response\Response
     *
     * @throws \InvalidRequestException
     */
    public function send(RequestInterface $request)
    {

        $httpRequest = $this->httpClient->post($request->getUri());

        $httpRequest
            ->setBody($request->toJson())
            ->setAuth($this->getKey(), '')
            ->setHeader('Content-Type', 'application/json');

        try {
            $response = $httpRequest->send();
        } catch (\Exception $e) {
            if (method_exists($e, 'getResponse')) {
                $response = $e->getResponse();
            } else {
                throw $e;
            }
        }

        return new Response\Response($response);
    }
}