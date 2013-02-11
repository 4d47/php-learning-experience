<?php

class ForEachTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testNull()
    {
        $var = null;
        foreach ($val as $value) ;
    }
}
