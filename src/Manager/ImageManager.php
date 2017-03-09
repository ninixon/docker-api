<?php

namespace MayMeow\Docker\Manager;

class ImageManager extends BaseManager
{
    const API_VERSION = 'v1.26';

    protected $config = [
        'find' => '{socket}/' . self::API_VERSION . '/images/json'
    ];

    /**
     * GET
     *
     * @return mixed
     */
    public function findAll()
    {
        //$context = $this->Http->context('GET');
        $this->api = $this->config['find'];

        // update api variables
        $this->set('{socket}', $this->client->getSocket());

        return $this->client->get($this->api);
    }

}
