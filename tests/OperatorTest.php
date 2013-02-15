<?php

class OperatorTest extends PHPUnit_Framework_TestCase
{
    public function testShortenedTernary()
    {
        if (version_compare(PHP_VERSION, '5.3', '<')) {
            $this->markTestSkipped('shortened ternary operator not available');
            return;
        }
        $this->assertEquals(42, null ?: 42);
        $this->assertEquals(42, false ?: 42);
        $this->assertEquals(true, true ?: 42);
    }
}
