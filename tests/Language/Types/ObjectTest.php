<?php

class Language_Types_ObjectTest extends PHPUnit_Framework_TestCase
{
    public function testUndefinedProperties()
    {
        if (version_compare(PHP_VERSION, '5.3', '>='))
            $this->setExpectedException('PHPUnit_Framework_Error');
        $object = new stdClass();
        $this->assertNull($object->foo);
    }
}
