<?php

class Function_InArrayTest extends PHPUnit_Framework_TestCase
{
    public function testArray()
    {
        $this->assertTrue(
            in_array(
                array('A' => 10, 'B' => 11),
                array(
                    array('A' => 20, 'B' => 21),
                    array('A' => 30, 'B' => 31),
                    array('A' => 10, 'B' => 11),
                )
            )
        );
    }
}
