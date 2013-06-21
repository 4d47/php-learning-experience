<?php

class Function_ArraySearchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     * @expectedExceptionMessage array_search() expects parameter 2 to be array, null given
     */
    public function testSearchNull()
    {
        $this->assertFalse(array_search('a', null));
    }
}
