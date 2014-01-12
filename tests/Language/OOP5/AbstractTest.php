<?php

class Language_OOP5_AbstractTest extends PHPUnit_Framework_TestCase
{
    public function testAccessing()
    {
        $this->assertSame(12, Language_OOP5_AbstractTest_A::$foo);
    }
}

abstract class Language_OOP5_AbstractTest_A {
    public static $foo = 12;
}
