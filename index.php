<?php

error_reporting(E_ALL);

require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$ctrl = !empty($parts[1]) ? ucfirst($parts[1]) : 'Index';
$action = !empty($parts[2]) ? ucfirst($parts[2]) : 'Default';

$controllerClassName = '\App\Controllers\\' . $ctrl;


try {
    $controller = new $controllerClassName();
    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение приложеня: ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой: ' . $e->getMessage();
} catch (Exception $e) {
    die('Неопознанная ошибка: ' . $e->getMessage());
}