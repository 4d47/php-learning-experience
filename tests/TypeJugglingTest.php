<?php

class TypeJugglingTest extends PHPUnit_Framework_TestCase
{
    public function testFromFalseToArray()
    {
        $var = false;
        $var['foo'] = 10;
        $this->assertEquals('array', gettype($var));
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     * @expectedExceptionMessage Cannot use a scalar value as an array
     */
    public function testFromTrueToArray()
    {
        $var = true;
        $var['foo'] = 10;
        $this->assertEquals('array', gettype($var));
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testFromStringToArray()
    {
        $this->markTestSkipped('This crash my PHP cli');
        $var = '2.5';
        $var['foo'] = 10;
    }
}
