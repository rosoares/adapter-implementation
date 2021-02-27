<?php


namespace Src;


class Order
{
    public function update(Updateable $updateable)
    {
        return $updateable->updateOrder();
    }
}