<?php

/**
 * App\Models\User => ./App/Models/User.php
 */
function __autoload($class){
    require __DIR__ . '/' .  str_replace('\\', '/', $class) . '.php';
}