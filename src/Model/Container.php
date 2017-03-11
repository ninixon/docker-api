<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/11/2017
 * Time: 6:55 PM
 */

namespace MayMeow\Docker\Model;

use MayMeow\Docker\Model\Container\GraphDriver;
use MayMeow\Docker\Model\Container\HostConfig;
use MayMeow\Docker\Model\Container\Mount;
use MayMeow\Docker\Model\Container\NetworkSettings;
use MayMeow\Docker\Model\Container\State;

class Container
{
    public $Id; //String
    public $Created; //String
    public $Path; //String
    public $Args; //array(Object)
    public $State; //State
    public $Image; //String
    public $ResolvConfPath; //String
    public $HostnamePath; //String
    public $HostsPath; //String
    public $LogPath; //String
    public $Name; //String
    public $RestartCount; //int
    public $Driver; //String
    public $MountLabel; //String
    public $ProcessLabel; //String
    public $AppArmorProfile; //String
    public $ExecIDs; //object
    public $HostConfig; //HostConfig OK
    public $GraphDriver; //GraphDriver
    public $Mounts; //array(Mount)
    public $Config; //
    public $NetworkSettings; //NetworkSettings OK

    public function __construct()
    {
        $this->NetworkSettings = new NetworkSettings();
        $this->HostConfig = new HostConfig();
        $this->GraphDriver = new GraphDriver();
        $this->State = new State();

        echo __CLASS__ . ' was initialded';
    }

    public function addMount($name = null)
    {
        $newMount = new Mount();
        if($name == null) {
            $this->Mounts[] = $newMount;
        } else {
            $this->Mounts[$name] = $newMount;
        }

        return $newMount;
    }
}