<?php

namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access($action)
    {
        return true;
    }

    public function action($name)
    {
        if ($this->access($name)) {
            $name = 'action' . $name;
            $this->$name();
        } else {
            die('Access denied!');
        }
    }
}