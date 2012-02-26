<?php

class Hone_Bootstrap_Model_Initialize
{
    public function start()
    {
        Bootstrap::set_ini(Mage::getRoot() . "/code/local/Hone/Bootstrap/Helper/Ini/Bootstrap.ini");
    }
}

class Bootstrap {
    
    protected static $_ini = null;

    
    public static function set_ini($path) {
        if(static::$_ini === null) {
            $parsed = parse_ini_file($path, true);
            static::$_ini = $parsed['css'];
        }
    }
    
    public static function compile($name){

            echo static::$_ini[$name];
    }
}