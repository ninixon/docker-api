<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/9/2017
 * Time: 12:03 AM
 */

namespace MayMeow\Docker\Client\Traits;

trait CliTrait
{
    protected function _setContext($method)
    {
        return 'HTTP 1.1 ' . $method . ' ';
    }
}