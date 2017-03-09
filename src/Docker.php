<?php

namespace MayMeow\Docker;

use MayMeow\Docker\Client\ClientInterface;

use MayMeow\Docker\Manager\ContainerManager;
use MayMeow\Docker\Manager\ImageManager;

class Docker
{
    protected $client;

    protected $ContainerManager;

    protected $ImageManager;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getContainerManager()
    {
        if (!$this->ContainerManager) {
            $this->ContainerManager = new ContainerManager($this->client);
        }

        return $this->ContainerManager;
    }

    public function getImageManager()
    {
        if (!$this->ImageManager) {
            $this->ImageManager = new ImageManager($this->client);
        }
        return $this->ImageManager;
    }
}
