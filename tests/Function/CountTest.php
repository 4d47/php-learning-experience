<?php

class Function_CountTest extends PHPUnit_Framework_TestCase
{
    public function testScalars()
    {
        $this->assertSame(0, count(null));
        $this->assertSame(1, count(0));
        $this->assertSame(1, count(1));
        $this->assertSame(1, count(2.0));
        $this->assertSame(1, count(false));
        $this->assertSame(1, count(true));
        $this->assertSame(1, count('foo'));
        $this->assertSame(1, count(''));
    }
}
