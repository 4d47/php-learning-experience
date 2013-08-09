<?php

class Language_FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testNoReturn()
    {
        $this->assertNull($this->returnVoid(), 'If the return is omitted the value NULL will be returned.');
    }

    public function testCallObjectCallback()
    {
        if (version_compare(PHP_VERSION, '5.4', '<'))
            $this->markTestSkipped('Fatal Error');
        $ten = array($this,  'return10');
        $this->assertSame(10, $ten());
    }

    private function returnVoid()
    {
        ;
    }

    private function return10()
    {
        return 10;
    }
}
