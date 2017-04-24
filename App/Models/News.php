<?php

namespace App\Models;

use App\Exceptions\MultiException;
use App\Model;
/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class News
    extends Model
{

    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    public function __get($k)
    {

        switch ($k) {
            case 'author':
                $r =  Author::findById($this->author_id);
                return $r;
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }

    public function fill($data = [])
    {
        $e = new MultiException();
        if (true){
            $e[] = new \Exception('Заголовок неверный');
        }
        if (true){
            $e[] = new \Exception('Text неверный');
        }
        throw $e;
    }

}