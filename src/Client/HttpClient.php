<?php

namespace MayMeow\Docker\Client;

use MayMeow\Docker\Client\Traits\HttpTrait;

class HttpClient implements ClientInterface
{
    use HttpTrait;

    public function setSocket($socket = null)
    {
        // TODO: Implement setSocket() method.
    }

    public function getSocket()
    {
        // TODO: Implement getSocket() method.
    }

    /**
     * @param null $api
     * @return string
     */
    public function get($api = null)
    {
        $context = $this->_setContext('GET');
        return file_get_contents($this->api, false, $context);
    }

    public function post($api = null)
    {
        // TODO: Implement post() method.
        $context = $this->_setContext('POST');
        return file_get_contents($this->api, false, $context);
    }

    public function delete($api = null)
    {
        // TODO: Implement delete() method.
        $context = $this->_setContext('DELETE');
        return file_get_contents($this->api, false, $context);
    }
}
