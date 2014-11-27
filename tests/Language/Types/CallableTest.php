<?php

class Language_Types_CallableTest extends PHPUnit_Framework_TestCase
{
    public function testPrivateMethod()
    {
        $this->assertTrue(call_user_func(array('Language_Types_CallableTest', 'one')));
        $this->assertTrue(call_user_func('Language_Types_CallableTest::one'));

        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            $this->assertTrue(call_user_func('self::one'));
            $this->assertTrue(call_user_func('static::one'));
        }
    }

    private static function one()
    {
        return true;
    }
}
