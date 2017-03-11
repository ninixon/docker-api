<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/11/2017
 * Time: 6:56 PM
 */

namespace MayMeow\Docker\Model\Container;


class NetworkSettings
{
    public $Bridge; //String
    public $SandboxID; //String
    public $HairpinMode; //boolean
    public $LinkLocalIPv6Address; //String
    public $LinkLocalIPv6PrefixLen; //int
    public $Ports; //Ports
    public $SandboxKey; //String
    public $SecondaryIPAddresses; //object
    public $SecondaryIPv6Addresses; //object
    public $EndpointID; //String
    public $Gateway; //String
    public $GlobalIPv6Address; //String
    public $GlobalIPv6PrefixLen; //int
    public $IPAddress; //String
    public $IPPrefixLen; //int
    public $IPv6Gateway; //String
    public $MacAddress; //String
    public $Networks; //Networks
}