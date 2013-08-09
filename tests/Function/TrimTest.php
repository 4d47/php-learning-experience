<?php

class Function_TrimTest extends PHPUnit_Framework_TestCase
{
    public function testNull()
    {
        $this->assertSame('', trim(null));
        $this->assertSame('', trim(null, 'a'));
    }

    public function testEmptyString()
    {
        $this->assertSame('', trim(''));
    }

    public function testNumber()
    {
        $this->assertSame('12', trim(12));
    }
}
