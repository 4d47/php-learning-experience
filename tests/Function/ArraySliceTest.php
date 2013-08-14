<?php

class Function_ArraySliceTest extends PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $this->assertEquals(array(), array_slice(array(), 0, 6));
    }
}
