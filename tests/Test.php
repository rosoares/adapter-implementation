<?php

use PHPUnit\Framework\TestCase;
use Lib\MarketplaceXML\Client;
use Lib\MarketplaceJSON\Handler;
use Src\Order;

class Test extends TestCase
{
    private string $payload;

    private Handler $marketPlaceJson;

    private Client $marketPlaceXML;

    private Order $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->marketPlaceJson = new Handler();

        $this->marketPlaceXML = new Client();

        $this->order = new Order();
    }

    public function test_can_update_order_by_xml()
    {
        $xml = $this->getXMLPayload();

        $this->marketPlaceXML->auth('test', '123456');

        $marketPlaceXMLAdapter = new MarketplaceXMLAdapter($this->marketPlaceXML, $xml);

        $created = $this->order->update($marketPlaceXMLAdapter);

        $this->assertTrue($created);
    }

    public function test_can_update_order_by_json()
    {
        $json = $this->getJSONPayoload();
        
        $this->marketPlaceJson->auth('$25k5daskdap*(12!30ao__');

        $marketPlaceJsonAdapter = new MarketPlaceJSONAdapter($this->marketPlaceJson, $json);

        $created = $this->order->update($marketPlaceJsonAdapter);

        $this->assertTrue($created);
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
