<?php

class FactorialTest extends \PHPUnit\Framework\TestCase{
    
    public function testFactorial()
    {
        $test = new App\Factorial();

        $this -> assertEquals(1, $test->factorial(0));
        $this -> assertEquals(1, $test->factorial(1));
        $this -> assertEquals(120, $test->factorial(5));
        $this -> assertEquals(11 * $test->factorial(10), $test->factorial(11));
        $this -> assertEquals(null, $test->factorial(-3));
        $this -> assertEquals(null, $test->factorial(1.5));
        $this -> assertEquals(null, $test->factorial(false));
        $this -> assertEquals(null, $test->factorial('abc'));
    }
}