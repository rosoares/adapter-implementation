<?php


namespace Lib\MarketplaceJSON;


class Order
{
    public $clientName;
    public $sellerName;
    public $value;
    public $discount;

    public function __construct($clientName, $sellerName, $value, $discount)
    {
        $this->clientName = $clientName;
        $this->sellerName = $sellerName;
        $this->value = $value;
        $this->discount = $discount;
    }
}