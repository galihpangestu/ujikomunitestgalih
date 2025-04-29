<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\ProductionService;

class ProductionServiceTest extends TestCase
{
    public function test_can_produce_when_stock_is_sufficient()
    {
        $service = new ProductionService(50);
        $result = $service->produce(30);

        $this->assertEquals("Produced 30 units.", $result);
        $this->assertEquals(20, $service->getStock());
    }

    public function test_cannot_produce_when_stock_is_insufficient()
    {
        $service = new ProductionService(10);
        $result = $service->produce(15);

        $this->assertEquals("Insufficient stock.", $result);
        $this->assertEquals(10, $service->getStock()); // stock tetap
    }
}
