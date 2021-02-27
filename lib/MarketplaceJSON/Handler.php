<?php

namespace Lib\MarketplaceJSON;

class Handler
{
    public string $ENDPOINT;

    // This marketplace uses authentication by Bearer Token
    public function auth($token)
    {
        echo 'Authenticate user';
    }

    public function updateOrder(Order $order)
    {
        echo 'Sending order to marketplace';

        return true;
    }
}