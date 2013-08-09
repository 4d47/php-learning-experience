<?php

class Language_Variables_ScopeTest extends PHPUnit_Framework_TestCase
{
    public function testScope()
    {
        if (true) { $foo = 12; }
        $this->assertSame(12, $foo);
    }
}
