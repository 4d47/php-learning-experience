<?php

class Function_JsonDecodeTest extends PHPUnit_Framework_TestCase
{
    public function testNull()
    {
        $this->assertNull(json_decode(null));
    }

    public function testEmptyString()
    {
        $this->assertNull(json_decode(''));
    }
}
