<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/8/2017
 * Time: 11:14 PM
 */

namespace MayMeow\Docker\Client;
use MayMeow\Docker\Client\Traits\CliTrait;

/**
 * Class CliClient
 *
 * This client is just for testing
 *
 * @package MayMeow\Docker\Client
 */
class CliClient implements ClientInterface
{
    use CliTrait;

    protected  $socket;

    /**
     * @param null $socket
     *
     * @return null
     */
    public function setSocket($socket = null)
    {
        $this->socket = $socket;
    }

    /**
     * @return mixed
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @param null $api
     * @return string
     */
    public function get($api = null)
    {
        return $this->_setContext('GET') . $api;
    }

    /**
     * @param null $api
     * @return string
     */
    public function post($api = null)
    {
        return $this->_setContext('POST') . $api;
    }

    /**
     * @param null $api
     * @return string
     */
    public function delete($api = null)
    {
        return $this->_setContext('DELETE') . $api;
    }

}