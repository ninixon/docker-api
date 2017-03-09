<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/9/2017
 * Time: 9:46 PM
 */

namespace MayMeow\Docker\Client\Traits;


trait SocketStreamTrait
{
    protected function _setContext($method, $api)
    {
        return $method . ' ' . $api . ' HTTP/1.1' . "\r\n";
    }
}