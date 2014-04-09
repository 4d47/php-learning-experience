<?php

class Class_ReflectionClassTest extends PHPUnit_Framework_TestCase
{
    public function testPdoParameters()
    {
        $pdoReflec = new ReflectionClass('PDO');
        $params = $pdoReflec->getConstructor()->getParameters();
        $names = array();
        foreach ($params as $p) {
            $names[] = $p->name;
        }
        $this->assertSame(array('dsn', 'username', 'passwd', 'options'), $names);
    }
}
