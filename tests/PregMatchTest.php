<?php

class PregMatchTest extends PHPUnit_Framework_TestCase
{
    public function testPregMatchWordBoudaries()
    {
        $this->assertEquals(1, preg_match('/\bfoo\b/', 'foo'));
        $this->assertEquals(1, preg_match('/\b\w+\b/', 'foo'));
        $this->assertEquals(1, preg_match('/@\w+/', '@foo'));
        $this->assertEquals(0, preg_match('/\b\x40\w+\b/', '@foo')); // I have no idea why
    }
}
