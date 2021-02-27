<?php

use PHPUnit\Framework\TestCase;
use Src\Order;

class Test extends TestCase
{
    private string $payload;

    private Order $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->order = new Order();
    }

    public function test_can_update_order_by_xml()
    {
        $xml = $this->getXMLPayload();
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
