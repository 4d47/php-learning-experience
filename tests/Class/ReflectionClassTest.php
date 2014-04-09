<?php

class Class_ReflectionClassTest extends PHPUnit_Framework_TestCase
{
    public function testPdoParameters()
    {
        $pdoReflec = new ReflectionClass('PDO');
        $params = $pdoReflec->getConstructor()->getParameters();
        $names = array_map(function ($p) { return $p->name; }, $params);
        $this->assertSame(array('dsn', 'username', 'passwd', 'options'), $names);
    }
}
