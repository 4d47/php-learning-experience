<?php

class Language_Types_ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testUndefinedProperties()
    {
        $a = new Language_Types_ArrayTest_A();
        $this->assertSame('test', $a->foo[Language_Types_ArrayTest_A::A]);
    }
}

class Language_Types_ArrayTest_A
{
    const A = 'a';
    public $foo = array(
        self::A => 'test',
    );
}
