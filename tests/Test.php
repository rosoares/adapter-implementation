<?php

use PHPUnit\Framework\TestCase;
use Lib\MarketplaceXML\Client;
use Lib\MarketplaceJSON\Handler;

class Test extends TestCase
{
    private string $payload;

    private Handler $marketPlaceJson;

    private Client $marketPlaceXML;

    protected function setUp(): void
    {
        parent::setUp();

        $this->marketPlaceJson = new Handler();

        $this->marketPlaceXML = new Client();
    }

    public function test_can_update_order_by_xml()
    {
        $xml = $this->getXMLPayload();

        $this->marketPlaceXML->auth('test', '123456');


    }

    public function test_can_update_order_by_json()
    {
        $json = $this->getJSONPayoload();
    }

    protected function getXMLPayload(): string
    {
        $file = file_get_contents('./files/order.xml');

        return $file;
    }

    protected function getJSONPayoload(): string
    {
        $file = file_get_contents('./files/order.json');

        return $file;
    }
}
