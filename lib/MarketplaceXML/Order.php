<?php


namespace Lib\MarketplaceJSON;


class Order
{
    public $buyerID;
    public $sellerID;
    public $totalOrderAmount;

    public function __construct($buyerID, $sellerID, $totalOrderAmount)
    {
        $this->buyerID;
        $this->sellerID;
        $this->totalOrderAmount;
    }
}