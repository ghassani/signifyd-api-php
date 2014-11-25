<?php

namespace Spliced\Signifyd\Tests;

use Spliced\Signifyd\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testFunctionality
     *
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $client = new Client('BAR');

        $this->assertEquals($client->getKey(), 'BAR');

        $client->setKey('FOO');

        $this->assertEquals($client->getKey(), 'FOO');

    }
}
