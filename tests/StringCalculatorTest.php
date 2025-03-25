<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    // TODO: String Calculator Kata Tests
    private StringCalculator $stringCalculator;
    protected function setUp() : void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }


    /**
     * @test
     */
    public function givenEmptyStringReturns0() : void
    {
        $returnValue = $this->stringCalculator->Add("");
        $this->assertEquals(0,$returnValue);
    }

    /**
     * @test
     */
    public function given1ArgumentReturnsArgument() : void
    {
        $returnValue = $this->stringCalculator->Add("1");
        $this->assertEquals(1,$returnValue);
    }

    /**
     * @test
     */
    public function given1And2AsArgumentsReturns3() : void
    {
        $returnValue = $this->stringCalculator->Add("1,2");
        $this->assertEquals(3,$returnValue);
    }

    /**
     * @test
     */
    public function givenNArgumentStringReturnsSum() : void
    {
        $returnValue = $this->stringCalculator->Add("1,2,3,4,5,6");
        $this->assertEquals(21,$returnValue);
    }

    /**
     * @test
     */
    public function givenArgumentLineBreakFunctionWorks() : void
    {
        $returnValue = $this->stringCalculator->Add("1\n2,3,4,5,6");
        $this->assertEquals(21,$returnValue);
    }

    /**
     * @test
     */
    public function givenDeliminatorFunctionWorks() : void
    {
        $returnValue = $this->stringCalculator->Add("//;\n1;2");
        $this->assertEquals(3,$returnValue);
    }
}