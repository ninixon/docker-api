<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/11/2017
 * Time: 7:16 PM
 */

namespace MayMeow\Docker\Model\Container;


class State
{
    public $Status; //String
    public $Running; //boolean
    public $Paused; //boolean
    public $Restarting; //boolean
    public $OOMKilled; //boolean
    public $Dead; //boolean
    public $Pid; //int
    public $ExitCode; //int
    public $Error; //String
    public $StartedAt; //Date
    public $FinishedAt; //Date
}