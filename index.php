<?php

require __DIR__ . '/autoload.php';

$users =  \App\Models\User::findAll();

print_r($users);