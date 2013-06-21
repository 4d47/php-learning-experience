<?php

class Function_PathInfoTest extends PHPUnit_Framework_TestCase
{
    public function testExtension()
    {
        $this->assertEquals('jpeg', pathinfo('foo.jpeg', PATHINFO_EXTENSION));
        $this->assertEquals('', pathinfo('foo', PATHINFO_EXTENSION));
        $this->assertEquals('orig', pathinfo('foo.jpeg.orig', PATHINFO_EXTENSION));
    }
}
