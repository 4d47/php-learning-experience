<?php

class Language_Types_TypeJugglingTest extends PHPUnit_Framework_TestCase
{
    public function testFalseToArray()
    {
        $var = false;
        $var['foo'] = 10;
        $this->assertInternalType('array', $var);
    }

    public function testFalseToObject()
    {
        if (version_compare(PHP_VERSION, '5.3', '>='))
            $this->setExpectedException('PHPUnit_Framework_Error_Notice');
        if (version_compare(PHP_VERSION, '5.4', '>='))
            $this->setExpectedException('PHPUnit_Framework_Error_Warning');
        $var = false;
        $var->name = 'bob';
    }

    public function testNullToObject()
    {
        $var = (object) null;
        $this->assertEquals('object', gettype($var));
    }

    public function testNullToArray()
    {
        $var = null;
        $var['foo'] = 10;
        $this->assertInternalType('array', $var);
    }

    public function testNullToString()
    {
        $this->assertEquals('', (string) null);
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     * @expectedExceptionMessage Cannot use a scalar value as an array
     */
    public function testTrueToArray()
    {
        $var = true;
        $var['foo'] = 10;
        $this->assertInternalType('array', $var);
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testStringToArray()
    {
        $this->markTestSkipped('This crash my (and Travis) PHP cli');
        // ... but PHP 5.4.6 on Ubuntu and PHPUnit 3.6.10 is ok, mmm
        $var = '2.5';
        $var['foo'] = 10;
    }
}