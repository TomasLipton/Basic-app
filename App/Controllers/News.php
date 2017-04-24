<?php

namespace App\Controllers;

use App\Exceptions\Core;
use App\Exceptions\MultiException;
use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
    }

    protected function actionDefault()
    {
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionCreate()
    {
        try {
            $article = new \App\Models\News();
            $article->fill([]);
        } catch (MultiException $e) {
            $this->view->errors = $e;
        }
        $this->view->display(__DIR__ . '/../templates/create.php');
    }

}