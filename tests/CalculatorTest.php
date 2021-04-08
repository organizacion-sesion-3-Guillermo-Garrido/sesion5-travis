<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testEsPar(): void
    {
        $result = $this->calculator->esPar(2);
        $this->assertTrue($result);
    } 
    public function testEsImpar(): void
    {
        $result = $this->calculator->esPar(1);
        $this->assertFalse($result);
    } 
}
