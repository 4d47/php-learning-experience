<?php

class Language_FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testReturnVoid()
    {
        $this->assertNull($this->returnNothing());
    }

    public function testCallObjectCallback()
    {
        if (version_compare(PHP_VERSION, '5.4', '<'))
            $this->markTestSkipped('Fatal Error');
        $ten = array($this,  'return10');
        $this->assertEquals(10, $ten());
    }

    private function returnNothing()
    {
        ;
    }

    private function return10()
    {
        return 10;
    }
}
