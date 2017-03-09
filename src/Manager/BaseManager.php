<?php

namespace MayMeow\Docker\Manager;

use Jdmaymeow\Docker\Client\DockerClient;
use Jdmaymeow\Docker\Client\HttpClient;
use MayMeow\Docker\Client\ClientInterface;

class BaseManager implements ManagerInterface
{
    protected $client;

    protected $api;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    protected function set($key, $value)
    {
        $this->api = str_replace($key, $value, $this->api);
    }

}
