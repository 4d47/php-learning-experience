<?php

class Language_OOP5_Magic_ToStringTest extends PHPUnit_Framework_TestCase
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
