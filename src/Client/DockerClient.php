<?php

namespace MayMeow\Docker\Client;

use MayMeow\Docker\Client\Traits\SocketStreamTrait;

class DockerClient implements ClientInterface
{
    use SocketStreamTrait;

    protected $socket;

    protected $host = 'Host: localhost' . "\r\n";

    protected $close = 'Connection: Close' . "\r\n\r\n";

    protected $dockerResponse = [];

    /**
     * Set default docker Socket
     * @param null $socket
     * @return null
     */
    public function setSocket($socket = null)
    {
        $this->socket = stream_socket_client('unix:///var/run/docker.sock', $errno, $errstr);
    }

    /**
     * Return Nothing, for stream client is not needed
     */
    public function getSocket()
    {
        // TODO: Implement getSocket() method.
    }

    public function get($api = null)
    {
        // TODO: Implement get() method.
        $request = $this->_setContext('GET', $api);
        $request .= $this->host;
        $request .= $this->close;

        return $this->_fireEvent($request);
    }

    public function post($api = null)
    {
        // TODO: Implement post() method.
        $request = $this->_setContext('POST', $api);
        $request .= $this->host;
        $request .= $this->close;

        return $this->_fireEvent($request);
    }

    public function delete($api = null)
    {
        // TODO: Implement delete() method.

        $request = $this->_setContext('DELETE', $api);
        $request .= $this->host;
        $request .= $this->close;

        return $this->_fireEvent($request);
    }

    protected function _fireEvent($request = null)
    {
        if ($this->socket && $request) {
            fwrite($this->socket, $request);
            $response = stream_get_contents($this->socket);
            fclose($this->socket);
        } else {
            $response = 'Cannot open connection to socket';
        }

        var_dump($response);

        return $this->_serverResponseParse($response);
    }

    public function _serverResponseParse($response = null)
    {
        $pregPattern = '/\{(?:[^{}]|(?R))*\}/';
        preg_match_all($pregPattern, $response, $matches);

        $dockerResponse = [];

        // If there is only one result return first one
        if(count($matches[0]) == 1) {
            foreach ($matches[0] as $match) {
                return json_decode($match);
            }
        }

        // Else create array with results
        foreach ($matches[0] as $match) {
            $dockerResponse[] = json_decode($match);
        }

        return $dockerResponse;
    }

}
