<?php

class OperatorTest extends PHPUnit_Framework_TestCase
{
    public function testShortenedTernary()
    {
        if (version_compare(PHP_VERSION, '5.3', '<')) {
            $this->markTestSkipped('shortened ternary operator not available');
            return;
        }
        $this->assertEquals(42, eval('return null ?: 42;'));
        $this->assertEquals(42, eval('return false ?: 42;'));
        $this->assertEquals(true, eval('return true ?: 42;'));
    }

    public function testComparingNull()
    {
        $this->assertTrue(null == 0);
        $this->assertTrue(null < 1);
        $this->assertFalse(null > -1);
    }
}
