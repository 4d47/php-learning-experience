<?php

class Function_ArraySearchTest extends PHPUnit_Framework_TestCase
{
    public function testNull()
    {
        if (defined('HHVM_VERSION')) {
            $msg = 'Invalid operand type was used: array_search expects array(s)';
        } else if (version_compare(PHP_VERSION, '5.3', '>=')) {
            $msg = 'array_search() expects parameter 2 to be array, null given';
        } else {
            $msg = 'array_search(): Wrong datatype for second argument';
        }
        $this->setExpectedException('PHPUnit_Framework_Error', $msg);
        $this->assertFalse(array_search('a', null));
    }
}
