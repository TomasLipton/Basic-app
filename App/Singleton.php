<?php

namespace App;


trait Singleton
{

    public $counter;

    protected static $instance;

    protected function __construct()
    {
    }

    public static function instance()// poluchenie
    {
        if (null === static::$instance){
            static::$instance = new static();
        }

        return static::$instance;
    }
}