<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-10-11
 * Time: 11:03
 */

namespace SwooleKit\Http\Server;

use SwooleKit\Util\Coroutine;

/**
 * Class ContextManager
 * @package SwooleKit\Http\Server
 */
class ContextManager extends \SwooleKit\Context\ContextManager
{
    /**
     * @return int|string
     */
    protected function getDefaultId()
    {
        return Coroutine::tid();
    }
}
