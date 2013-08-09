<?php

class Function_PregMatchTest extends PHPUnit_Framework_TestCase
{
    public function testhWordBoudaries()
    {
        $this->assertSame(1, preg_match('/\bfoo\b/', 'foo'));
        $this->assertSame(1, preg_match('/\b\w+\b/', 'foo'));
        $this->assertSame(1, preg_match('/@\w+/', '@foo'));
        $this->assertSame(0, preg_match('/\b\x40\w+\b/', '@foo')); // I have no idea why
    }
}
