<?php


namespace Src;


use Lib\MarketplaceJSON\Handler;
use Lib\MarketplaceJSON\Order;

class MarketPlaceJSONAdapter implements Updateable
{
    public Handler $handler;

    public string $json;

    public function __construct(Handler $handler, string $json)
    {
        $this->handler = $handler;
        $this->json = $json;
    }

    public function updateOrder()
    {
        $order = $this->parseOrder();

        return $this->handler->updateOrder($order);
    }

    public function parseOrder() : Order
    {
        $object = json_decode($this->json);

        $order = new Order(
            $object->order->client->name,
            $object->order->seller->name,
            $object->order->value,
            $object->order->discountValue
        );

        return $order;
    }
}