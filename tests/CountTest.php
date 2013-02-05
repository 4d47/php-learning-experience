<?php

class CountTest extends PHPUnit_Framework_TestCase
{
    public function testCountScalar()
    {
        $this->assertEquals(0, count(null));
        $this->assertEquals(1, count(0));
        $this->assertEquals(1, count(1));
        $this->assertEquals(1, count(false));
        $this->assertEquals(1, count(true));
        $this->assertEquals(1, count('foo'));
    }
}
