<?php

class Function_PathInfoTest extends PHPUnit_Framework_TestCase
{
    public function testExtension()
    {
        $this->assertSame('jpeg', pathinfo('foo.jpeg', PATHINFO_EXTENSION));
        $this->assertSame('', pathinfo('foo', PATHINFO_EXTENSION));
        $this->assertSame('orig', pathinfo('foo.jpeg.orig', PATHINFO_EXTENSION));
    }
}
