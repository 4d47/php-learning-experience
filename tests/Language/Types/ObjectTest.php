<?php

class Language_Types_ObjectTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testUndefinedProperties()
    {
        $object = new stdClass();
        $this->assertNull($object->foo);
    }
}
