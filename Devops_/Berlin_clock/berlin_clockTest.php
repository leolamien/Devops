<?php
require "berlin_clock.php";

use PHPUnit\Framework\TestCase;

class berlin_clockTest extends TestCase
{
    public function testMinutes()
    {
        $minute = new berlin_clock();
        $actual = $minute->minutes(5);
        $this->assertEquals("11111", $actual);
    }
    public function testFiveMinutes()
    {
        $minute = new berlin_clock();
        $actual = $minute->fiveMinutes(5);
        $this->assertEquals("1", $actual);
    }
    public function testHours()
    {
        $hour = new berlin_clock();
        $actual = $hour->hours(5);
        $this->assertEquals("11111", $actual);
    }
    public function testFiveHours()
    {
        $hour = new berlin_clock();
        $actual = $hour->fiveHours(20);
        $this->assertEquals("1111", $actual);
    }
    public function testSeconds()
    {
        $second = new berlin_clock();
        $actual = $second->seconds(20);
        $this->assertEquals("1", $actual);
    }
    public  function testAllClock()
    {
        $second = new berlin_clock();
        $actual = $second->heureEntiere(00,00,01);
        $this->assertEquals("111 111 1111 111 0", $actual);
    }
}
