<?php

class FunctionTest extends PHPUnit_Framework_TestCase
{
    public function testReturnVoid()
    {
        $this->assertNull($this->returnNothing());
    }

    private function returnNothing() { ; }
}
