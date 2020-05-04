<?php

require ("src/FizzBuzz.php");

use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{    
    public function testValidFizz()
    {   
        $fizz = FizzBuzz::numberIsFizz(9);
        $this->assertEquals('Fizz', $fizz);   
    }

    public function testInvalidFizz()
    {    
        $fizz = FizzBuzz::numberIsFizz(1);
        $this->assertEquals(1, $fizz);    
    }

    public function testValidBuzz()
    {
        $buzz = FizzBuzz::numberIsBuzz(5);
        $this->assertEquals('Buzz', $buzz);
    }

    public function testInvalidBuzz()
    {
        $buzz = FizzBuzz::numberIsBuzz(1);
        $this->assertEquals(1, $buzz);  
    }

    public function testValidFizzBuzz()
    {
        $fizzbuzz = FizzBuzz::numberFizzBuzz(15);
        $this->assertEquals('FizzBuzz', $fizzbuzz);
    }

    public function testInvalidFizzBuzz()
    {
        $fizzbuzz = FizzBuzz::numberFizzBuzz(11);
        $this->assertEquals(11, $fizzbuzz);
    }   
}
?>