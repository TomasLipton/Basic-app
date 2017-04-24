<?php
/**
 * Created by PhpStorm.
 * User: avgust
 * Date: 09.04.17
 * Time: 17:28
 */

namespace App\Exceptions;


use App\TCollection;

class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
}