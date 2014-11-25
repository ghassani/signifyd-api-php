<?php

namespace Spliced\Signifyd\Tests;

use Spliced\Signifyd\Client;
use Spliced\Signifyd\Response\Response;

/**
 * ClientMock
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ClientMock extends Client
{

    /**
     * {@inheritDoc}
     */
    public function doRequest($request)
    {
        return new Response('I AM A RESPONSES CONTENT', 201);
    }


}