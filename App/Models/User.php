<?php

namespace App\Models;


class User
{
    public $email;
    public $name;

    public static function findAll()
    {
        $db= new \App\Db;
        return $db->query('SELECT * FROM users', 'App\Models\User');
    }
}