<?php

class Function_GetParentClassTest extends PHPUnit_Framework_TestCase
{
    public function testDoesNotExtendADefaultObject()
    {
        $this->assertFalse(get_parent_class(new stdClass()));
        $this->assertFalse(get_parent_class('Directory'));
    }
}
