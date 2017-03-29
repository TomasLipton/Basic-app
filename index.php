<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$res = $db->execute('Create TABLE foo (id SERIAL)');