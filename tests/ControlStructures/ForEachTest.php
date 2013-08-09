<?php

class ControlStructures_ForEachTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testNull()
    {
        foreach (null as $value) ;
    }

    public function testStdClass()
    {
        $var = new stdClass();
        $var->a = 'a';
        $var->b = 'b';
        $result = '';
        foreach ($var as $key => $value) {
            $result .= "$key$value";
        }
        $this->assertSame('aabb', $result);
        $this->assertNotInstanceOf('Traversable', $var);
    }
}
