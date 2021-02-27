<?php


class MarketplaceXML
{
    public string $ENDPOINT;

    // This marketplace uses authentication by Bearer Token
    public function auth($token)
    {
        echo 'Authenticate user';
    }

    public function updateOrder(string $json)
    {
        echo 'Sending order to marketplace';

        return true;
    }
}