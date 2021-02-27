<?php

namespace Lib\MarketplaceJSON;

class Handler
{
    public string $ENDPOINT;

    private Order $order;

    // This marketplace uses authentication by Bearer Token
    public function auth($token)
    {
        echo 'Authenticate user';
    }

    public function parseOrder(string $xml)
    {
        echo 'Transforming xml to a JSON order object';
    }

    public function updateOrder()
    {
        echo 'Sending order to marketplace';

        return true;
    }
}