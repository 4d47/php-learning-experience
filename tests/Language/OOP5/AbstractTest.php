<?php

class Language_OOP5_AbstractTest extends PHPUnit_Framework_TestCase
{
    public function testAccessing()
    {
        $this->assertSame(12, A::$foo);
    }
}

abstract class A {
    public static $foo = 12;
}
