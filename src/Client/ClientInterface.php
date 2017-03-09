<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/8/2017
 * Time: 11:02 PM
 */

namespace MayMeow\Docker\Client;

interface ClientInterface
{
    /**
     * @param null $socket
     * @return mixed
     */
    public function setSocket($socket = null);

    /**
     * @return mixed
     */
    public function getSocket();

    /**
     * @param null $api
     * @return mixed
     */
    public function get($api = null);

    /**
     * @param null $api
     * @return mixed
     */
    public function post($api = null);

    /**
     * @param null $api
     * @return mixed
     */
    public function delete($api = null);
}