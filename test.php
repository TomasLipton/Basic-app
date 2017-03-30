<?php
error_reporting(E_ALL);
require __DIR__ . '/autoload.php';

$s = \App\Singleton::instance();
$s->counter = 1;
var_dump($s);


$s = \App\Singleton::instance();
var_dump($s);