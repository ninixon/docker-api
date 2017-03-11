<?php

require_once 'vendor/autoload.php';
//phpInfo();

$container = new \MayMeow\Docker\Model\Container();

$container->addMount()->setType('RW')
    ->setRW(false)
    ->setSource('maymeow_cloud')
    ->setDestination('/var/www/html');

$container->addMount('maymeow_cloud_disk')
    ->setDestination('centr')
    ->setSource('disk_m')
    ->setRW('true');


print_r(json_encode($container));