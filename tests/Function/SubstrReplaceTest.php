<?php

class Function_SubstrReplaceTest extends PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $this->assertSame('hello world...', substr_replace('hello world as i see it', '...', 11));
        $this->assertSame('hello...', substr_replace('hello', '...', 11));
    }
}
