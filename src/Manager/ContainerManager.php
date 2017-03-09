<?php
namespace MayMeow\Docker\Manager;

class ContainerManager extends BaseManager
{
    const API_VERSION = 'v1.26';

    /**
     * API
     * @var array
     */
    protected $config = [
        'find' => '{socket}/' . self::API_VERSION . '/containers/json?all=1',
        'inspect' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/json',
        'top' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/top',
        'changes' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/changes',
        'stats' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/stats?stream=0',
        'start' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/start',
        'stop' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/stop',
        'restart' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/restart',
        'kill' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/kill',
        'rename' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/rename?name={newName}',
        'pause' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/pause',
        'unpause' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/unpause',
        'attach' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/attach?logs=0&stream=0&stdout=1',
        'wait' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/wait',
        'remove' => '{socket}/' . self::API_VERSION . '/containers/{containerID}',
        'archive' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/archive?path={path}',
        'export' => '{socket}/' . self::API_VERSION . '/containers/{containerID}/export',
    ];

    /**
     * GET
     *
     * @param null $options
     * @return mixed
     */
    public function findAll($options = null)
    {
        $this->api = $this->config['find'];

        $this->set('{socket}', $this->client->getSocket());

        return $this->client->get($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @return mixed
     */
    public function inspect($containerID)
    {
        $this->api = $this->config['inspect'];

        //Set Socket And variable
        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->get($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @return mixed
     */
    public function top($containerID)
    {
        $this->api = $this->config['top'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->get($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @return mixed
     */
    public function changes($containerID)
    {
        $this->api = $this->config['changes'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->get($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @return mixed
     */
    public function stats($containerID)
    {
        $this->api = $this->config['stats'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->get($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function start($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['start'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function stop($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['stop'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function restart($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['restart'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function kill($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['kill'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @param $name
     * @return mixed
     */
    public function rename($containerID, $name)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['rename'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);
        $this->set('{newName}', $name);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function pause($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['pause'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function unpause($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['unpause'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function attach($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['attach'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * POST
     *
     * @param $containerID
     * @return mixed
     */
    public function wait($containerID)
    {
        //$context = $this->Http->context('POST');
        $this->api = $this->config['wait'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->post($this->api);
    }

    /**
     * DELETE
     *
     * @param $containerID
     * @return mixed
     */
    public function remove($containerID)
    {
        //$context = $this->Http->context('DELETE');
        $this->api = $this->config['remove'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->delete($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @param $path
     * @return mixed
     */
    public function archive($containerID, $path)
    {
        //$context = $this->Http->context('GET');
        $this->api = $this->config['archive'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);
        $this->set('{path}', $path);

        return $this->client->get($this->api);
    }

    /**
     * GET
     *
     * @param $containerID
     * @return string
     */
    public function export($containerID)
    {
        //$context = $this->Http->context('GET');
        $this->api = $this->config['export'];

        $this->set('{socket}', $this->client->getSocket());
        $this->set('{containerID}', $containerID);

        return $this->client->get($this->api);
    }
}
