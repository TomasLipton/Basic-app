<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\MultiException;

class Index
    extends Controller
{
    protected function actionDefault()
    {
        $this->view->title = 'Defaul action on Index controller';
        $this->view->text = explode(' ', 'Defaul action on Index controller');
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionMultiexception()
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