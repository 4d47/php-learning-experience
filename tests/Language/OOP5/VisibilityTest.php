<?php

class Language_OOP5_VisibilityTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->b = new B();
    }

    public function testIncreasing()
    {
        $this->assertSame(12, $this->b->foo);
    }
}

class A {
    protected $foo = 12;
    public $bar = 13;
}
class B extends A {
    public $foo = 12;
    // private $bar = 13; decreasing visibility is disallowed with PHP Error_Fatal
}
