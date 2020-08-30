<?php

namespace MutationTesting;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /**
     * @var Calculator
     */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd001(): void
    {
        $this->assertEquals(0, $this->calculator->add(0, 0));
    }
}
