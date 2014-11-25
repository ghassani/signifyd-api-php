<?php

namespace Spliced\Signifyd\Tests\Request;

use Spliced\Signifyd\Client;
use Spliced\Signifyd\Model;

class CreateCaseTest extends \PHPUnit_Framework_TestCase
{

    public function testFunctionality()
    {

        $apiKey = '';


        $client = new Client($apiKey);

        $request = $client->createRequest('CreateCase');

        $currentDate = new \DateTime();

        $purchase = new Model\Purchase();

        $purchase->setBrowserIpAddress(@$_SERVER['REMOTE_ADDR'])
            ->setOrderId('123456')
            ->setCreatedAt($currentDate->format(DATE_ISO8601))
            ->setPaymentGateway('Manual')
            ->setCurrency('USD')
            ->setAvsResponseCode('Y')
            ->setCvvResponseCode('M')
            ->setOrderChannel('WEB')
            ->setReceivedBy('John Doe')
            ->setTotalPrice(99.98);

        $productA = new Model\Product();
        $productA->setItemId('0001')
            ->setItemName('ITEM BAR')
            ->setItemPrice(49.99)
            ->setItemQuantity(1);

        $productB = new Model\Product();
        $productB->setItemId('0002')
            ->setItemName('ITEM BAZ')
            ->setItemPrice(49.99)
            ->setItemQuantity(1);

        $purchase->addProduct($productA)
            ->addProduct($productB);


        $recipient = new Model\Recipient();

        $recipientAddress = new Model\Address();

        $recipientAddress->setStreetAddress('1234 Testing St')
            ->setUnit(null)
            ->setCity('Vista')
            ->setProvinceCode('CA')
            ->setPostalCode('92081')
            ->setCountryCode('US');

        $recipient->setFullName('Gassan Idriss')
            ->setConfirmationEmail('gidriss@miva.com')
            ->setConfirmationPhone('6192929084')
            ->setOrganization('Miva Inc')
            ->setDeliveryAddress($recipientAddress);

        $request->setPurchase($purchase)->setRecipient($recipient);

        $response = $request->send();
    }

}
