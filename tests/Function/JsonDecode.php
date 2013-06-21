<?php

class Function_JsonDecodeTest extends PHPUnit_Framework_TestCase
{
    public function testDecodeNull()
    {
        $this->assertNull(json_decode(null));
    }
}
