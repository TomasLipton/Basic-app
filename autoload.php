<?php

$vendor =  __DIR__ . '/../vendor/autoload.php';
if (is_readable($vendor)){
    include $vendor;
}

spl_autoload_register(
    function ($class) {
        $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($filename)) {
            include $filename;
        }
    }
);