<?php

class ToStringTest extends PHPUnit_Framework_TestCase
{
    public function testStringInterpolation()
    {
        $this->assertEquals("foo", "$this");
    }

    public function __toString()
    {
        return "foo";
    }
}
