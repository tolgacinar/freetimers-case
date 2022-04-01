<?php

namespace FreetimersCase;

class Calculator
{
    private static $cost_per_bag;

    public function __construct($cost)
    {
        self::$cost_per_bag = $cost;
    }

    public static function calculateQuantity($meters)
    {
        return ceil(($meters * 0.025) * 1.4);
    }

    public static function calculatePrice($bags)
    {
        return $bags * self::$cost_per_bag;
    }

    public function calculate($meters)
    {
        $bags = self::calculateQuantity($meters);
        $price = self::calculatePrice($bags);
        return [
            "bags"  =>  $bags,
            "price" =>  $price
        ];
    }
}
