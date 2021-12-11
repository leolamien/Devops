<?php
require "fizzbuzz.php";
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
public  function testFizz15(){
    $fizzbuzz = new FizzBuzz();
$actual = $fizzbuzz->play(15);
$this->assertEquals("fizzbuzz",$actual);
}
    public  function testFizz3(){
        $fizzbuzz = new FizzBuzz();
        $actual = $fizzbuzz->play(3);
        $this->assertEquals("fizz",$actual);
    }
}
