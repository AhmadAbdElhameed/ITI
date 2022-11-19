<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{
    public function testAdd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);
        $this->assertEquals(25,$result);
        $result = $calculator->add(0,0);
        $this->assertEquals(0,$result);
        $result = $calculator->add(-9,-7);
        $this->assertEquals(-16,$result);
    }
    public function testSubtract(){
        $calculator = new App\Calculator;
        $result = $calculator->Subtract(20,5);
        $this->assertEquals(15,$result);
        $result = $calculator->Subtract(0,0);
        $this->assertEquals(0,$result);
        $result = $calculator->Subtract(-9,-7);
        $this->assertEquals(-2,$result);
    }
}