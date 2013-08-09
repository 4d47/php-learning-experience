<?php

class Function_ArraySearchTest extends PHPUnit_Framework_TestCase
{
    public function testNull()
    {
        $this->setExpectedException('PHPUnit_Framework_Error',
            version_compare(PHP_VERSION, '5.3', '>=')
            ? 'array_search() expects parameter 2 to be array, null given'
            : 'array_search(): Wrong datatype for second argument'
        );
        $this->assertFalse(array_search('a', null));
    }
}
