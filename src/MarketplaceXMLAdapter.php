<?php


namespace Src;


use Lib\MarketplaceXML\Client;
use Lib\MarketplaceXML\Order;

class MarketplaceXMLAdapter implements Updateable
{
    public $xml;

    public $client;

    public function __construct(Client $client, string $xml)
    {
        $this->client = $client;
        $this->xml = $xml;
    }

    public function updateOrder(): bool
    {
        $order = $this->parserOrder();
        return $this->client->putOrder($order);
    }

    private function parserOrder(): Order
    {
        $object = simplexml_load_string($this->xml);

        $order = new Order($object->buyer->id, $object->seller->id, $object->amount - $object->discount);

        return $order;
    }
}