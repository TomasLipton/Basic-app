<?php
/**
 * Created by PhpStorm.
 * User: avgust
 * Date: 09.04.17
 * Time: 17:28
 */

namespace App;


class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
}