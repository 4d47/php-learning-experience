<?php

class Language_FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testReturnVoid()
    {
        $this->assertNull($this->returnNothing());
    }


    public function testCall()
    {
        $ten = array($this,  'return10');
        $this->assertEquals(10, $ten());
    }

    private function returnNothing() { ; }
    private function return10() { return 10; }
}
