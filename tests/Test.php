<?php

use PHPUnit\Framework\TestCase;
use Lib\MarketplaceJSON;
use Lib\MarketplaceXML;

class Test extends TestCase
{
    private string $payload;

    private MarketplaceJSON $marketPlaceJson;

    private MarketplaceXML $marketPlaceXML;

    protected function setUp(): void
    {
        parent::setUp();

        $this->marketPlaceJson = new MarketplaceJSON();

        $this->marketPlaceXML = new MarketplaceXML();
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
