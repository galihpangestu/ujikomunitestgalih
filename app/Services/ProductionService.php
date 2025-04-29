<?php

namespace App\Services;

class ProductionService
{
    protected $stock;

    public function __construct($initialStock = 100)
    {
        $this->stock = $initialStock;
    }

    public function produce($quantity)
    {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
            return "Produced $quantity units.";
        }

        return "Insufficient stock.";
    }

    public function getStock()
    {
        return $this->stock;
    }
}
