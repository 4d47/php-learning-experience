<?php

class TrimTest extends PHPUnit_Framework_TestCase
{
    public function testTrim()
    {
        $this->assertEquals(null, trim(null));
        $this->assertEquals(null, trim(null, 'a'));
        $this->assertEquals('', trim(''));
    }
}
