<?php

namespace Lib\MarketplaceXML;

use Lib\MarketplaceXML\Order;

class Client
{
    public string $ENDPOINT;

    // This marketplace uses authentication by basic auth
    public function auth($user, $pass)
    {
        echo 'Authenticate user by basic';
    }

    public function putOrder(Order $order)
    {
        echo 'Sending order to marketplace';

        return true;
    }
}