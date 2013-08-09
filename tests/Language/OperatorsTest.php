<?php

class Language_OperatorsTest extends PHPUnit_Framework_TestCase
{
    public function testShortenedTernary()
    {
        if (version_compare(PHP_VERSION, '5.3', '<')) {
            $this->markTestSkipped('shortened ternary operator not available');
            return;
        }
        $this->assertSame(42, eval('return null ?: 42;'));
        $this->assertSame(42, eval('return false ?: 42;'));
        $this->assertSame(true, eval('return true ?: 42;'));
    }

    public function testComparingNull()
    {
        $this->assertTrue(null == 0);
        $this->assertTrue(null < 1);
        $this->assertFalse(null > -1);
    }

    public function testStriclyEqual()
    {
        $this->assertTrue(false !== 0);
    }

    public function testAddingArray()
    {
        $this->assertSame(array(1, 2), array(1, 2) + array(3));
        $this->assertSame(array(3, 2), array(3) + array(1, 2));
    }
}
