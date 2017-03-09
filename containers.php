<?php

namespace test;

use MayMeow\Docker\Client\CliClient;
use MayMeow\Docker\Client\DockerClient;
use MayMeow\Docker\Docker;
use MayMeow\Docker\Manager\ContainerManager;

require_once "vendor/autoload.php";

/*use Jdmaymeow\Docker\Docker;
use Jdmaymeow\Docker\Client\DockerClient;
use Jdmaymeow\Docker\Engine;

$dc = new DockerClient();
$dc->setSocket('http://10.11.220.9:2376');
$docker = new Docker($dc);

$engine = new Engine();

$engine->containers = $docker->getContainerManager()->findAll();
$engine->view = 'webroot/containers.html';

echo $engine->renderView();*/

/*$client = new CliClient();

$client->setSocket('localhost:5000');*/

$docker = new Docker(new DockerClient());

$docker->getClient()
    ->setSocket();

$containers = $docker->getContainerManager()->start('9ef17ed86099');

print_r($containers);