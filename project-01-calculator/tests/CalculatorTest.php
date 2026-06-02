<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testCanSumTwoNumbers()
    {
        $result = $this->calculator->sum(5, 5);

        $this->assertEquals(10, $result);
    }
    public function testCanCalculatePower()
    {
        $result = $this->calculator->power(2, 3);
        $this->assertEquals(8, $result);
    }
    public function testCanCalculateSquareRoot()
    {
        $result = $this->calculator->squareRoot(25);
        $this->assertEquals(5, $result);
    }
    public function testCannotCalculateNegativeSquareRoot()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->squareRoot(-1);
    }
    public function testCanCalculateAverage()
    {
        $result = $this->calculator->average([10, 20, 30]);
        $this->assertEquals(20, $result);
    }
}
