<?php
use PHPUnit\Framework\TestCase;
class FizzBuzz
{
    public function count(): string {
        return "1";
    }
    public function play(int $number): string {
        if($number%3 == 0 && $number%5 == 0) return "fizzbuzz";
        if($number%3 == 0) return "fizz";
        if($number%5 == 0) return "buzz";
        return $number;
    }
}