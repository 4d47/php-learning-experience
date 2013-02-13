<?php

class PathInfoTest extends PHPUnit_Framework_TestCase
{
    public function testPathinfoExtension()
    {
		$this->assertEquals('jpeg', pathinfo('foo.jpeg', PATHINFO_EXTENSION));
		$this->assertEquals('', pathinfo('foo', PATHINFO_EXTENSION));
		$this->assertEquals('orig', pathinfo('foo.jpeg.orig', PATHINFO_EXTENSION));
    }
}
