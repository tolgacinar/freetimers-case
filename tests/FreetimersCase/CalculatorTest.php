<?php

declare(strict_types=1);

namespace FreetimersCase;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateQuantity()
    {
        $calculator = new Calculator(72);
        $this->assertEquals(
            4,
            $calculator->calculateQuantity(110)
        );
    }

    public function testCalculatePrice()
    {
        $calculator = new Calculator(72);
        $bags = $calculator->calculateQuantity(110);
        $this->assertEquals(
            288,
            $calculator->calculatePrice($bags)
        );
    }
}
