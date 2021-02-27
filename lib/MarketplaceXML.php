<?php


class MarketplaceXML
{
    public string $ENDPOINT;

    // This marketplace uses authentication by basic auth
    public function auth($user, $pass)
    {
        echo 'Authenticate user by basic';
    }

    public function putOrder(string $xml)
    {
        echo 'Sending order to marketplace';

        return true;
    }
}