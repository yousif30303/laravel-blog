<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;


class CalculatorTest extends TestCase
{
    protected Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function test_add()
    {
        $this->assertEquals(10, $this->calculator->add(2, 3));
    }

    public function test_subtract()
    {
        $this->assertEquals(1, $this->calculator->subtract(4, 3));
    }

    public function test_multiply()
    {
        $this->assertEquals(12, $this->calculator->multiply(3, 4));
    }

    public function test_divide()
    {
        $this->assertEquals(5, $this->calculator->divide(10, 2));
    }

    public function test_divide_by_zero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Cannot divide by zero.");

        $this->calculator->divide(5, 0);
    }
}
