<?php

require_once "vendor/autoload.php";

use Jdmaymeow\Docker\Docker;
use Jdmaymeow\Docker\Client\DockerClient;
use Jdmaymeow\Docker\Model\Container\Container;

//$dc = new DockerClient();

//$dc->setSocket('http://10.11.220.9:4243');

//echo $dc->getSocket();

//$docker = new Docker($dc);

//$containers =  $docker->getContainerManager()->inspect('registry');

//$container = $docker->getContainerManager()->inspect('registry');

//$logy = $docker->getContainerManager()->stats('MySQL');

//$images = $docker->getContainerManager()->findAll();

//$changes = $docker->getContainerManager()->exfport('registry');
/*
foreach ($containers as $cnt) {
    echo $cnt->Names[0] . "\n";
}*/

//print_r($images);


//foreach ($images as $img) {
//    echo $img->Names[0] . ' - ' . $img->Image . ': ' . $img->State . "\n";
//}

$json = '{
       "Hostname": "",
       "Domainname": "",
       "User": "",
       "AttachStdin": false,
       "AttachStdout": true,
       "AttachStderr": true,
       "Tty": false,
       "OpenStdin": false,
       "StdinOnce": false,
       "Env": [
               "FOO=bar",
               "BAZ=quux"
       ],
       "Cmd": [
               "date"
       ],
       "Entrypoint": "",
       "Image": "ubuntu",
       "Labels": {
               "com.example.vendor": "Acme",
               "com.example.license": "GPL",
               "com.example.version": "1.0"
       },
       "Volumes": {
         "/volumes/data": {}
       },
       "WorkingDir": "",
       "NetworkDisabled": false,
       "MacAddress": "12:34:56:78:9a:bc",
       "ExposedPorts": {
               "22/tcp": {}
       },
       "StopSignal": "SIGTERM",
       "HostConfig": {
         "Binds": ["/tmp:/tmp"],
         "Tmpfs": { "/run": "rw,noexec,nosuid,size=65536k" },
         "Links": ["redis3:redis"],
         "Memory": 0,
         "MemorySwap": 0,
         "MemoryReservation": 0,
         "KernelMemory": 0,
         "CpuPercent": 80,
         "CpuShares": 512,
         "CpuPeriod": 100000,
         "CpuQuota": 50000,
         "CpusetCpus": "0,1",
         "CpusetMems": "0,1",
         "IOMaximumBandwidth": 0,
         "IOMaximumIOps": 0,
         "BlkioWeight": 300,
         "BlkioWeightDevice": [{}],
         "BlkioDeviceReadBps": [{}],
         "BlkioDeviceReadIOps": [{}],
         "BlkioDeviceWriteBps": [{}],
         "BlkioDeviceWriteIOps": [{}],
         "MemorySwappiness": 60,
         "OomKillDisable": false,
         "OomScoreAdj": 500,
         "PidMode": "",
         "PidsLimit": -1,
         "PortBindings": { "22/tcp": [{ "HostPort": "11022" }] },
         "PublishAllPorts": false,
         "Privileged": false,
         "ReadonlyRootfs": false,
         "Dns": ["8.8.8.8"],
         "DnsOptions": [""],
         "DnsSearch": [""],
         "ExtraHosts": null,
         "VolumesFrom": ["parent", "other:ro"],
         "CapAdd": ["NET_ADMIN"],
         "CapDrop": ["MKNOD"],
         "GroupAdd": ["newgroup"],
         "RestartPolicy": { "Name": "", "MaximumRetryCount": 0 },
         "NetworkMode": "bridge",
         "Devices": [],
         "Sysctls": { "net.ipv4.ip_forward": "1" },
         "Ulimits": [{}],
         "LogConfig": { "Type": "json-file", "Config": {} },
         "SecurityOpt": [],
         "StorageOpt": {},
         "CgroupParent": "",
         "VolumeDriver": "",
         "ShmSize": 67108864
      },
      "NetworkingConfig": {
          "EndpointsConfig": {
              "isolated_nw" : {
                  "IPAMConfig": {
                      "IPv4Address":"172.20.30.33",
                      "IPv6Address":"2001:db8:abcd::3033",
                      "LinkLocalIPs":["169.254.34.68", "fe80::3468"]
                  },
                  "Links":["container_1", "container_2"],
                  "Aliases":["server_x", "server_y"]
              }
          }
      }
  }';

$cnt = new Container();

$cnt->Hostname = 'novy container';
$cnt->getHostConfig()->Image = 'wordpress:7';

$json = [];
foreach ($cnt as $key => $value) {
    if (!is_null($value)) {
        $json[$key] = $value;
    }
}

print_r(json_encode($json));