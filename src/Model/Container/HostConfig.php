<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/11/2017
 * Time: 7:03 PM
 */

namespace MayMeow\Docker\Model\Container;

class HostConfig
{
    public $Binds; //array(String)
    public $ContainerIDFile; //String
    public $LogConfig; //LogConfig
    public $NetworkMode; //String
    public $PortBindings; //PortBindings
    public $RestartPolicy; //RestartPolicy
    public $AutoRemove; //boolean
    public $VolumeDriver; //String
    public $VolumesFrom; //array(Object)
    public $CapAdd; //object
    public $CapDrop; //object
    public $Dns; //array(Object)
    public $DnsOptions; //array(Object)
    public $DnsSearch; //array(Object)
    public $ExtraHosts; //object
    public $GroupAdd; //object
    public $IpcMode; //String
    public $Cgroup; //String
    public $Links; //object
    public $OomScoreAdj; //int
    public $PidMode; //String
    public $Privileged; //boolean
    public $PublishAllPorts; //boolean
    public $ReadonlyRootfs; //boolean
    public $SecurityOpt; //object
    public $UTSMode; //String
    public $UsernsMode; //String
    public $ShmSize; //int
    public $Runtime; //String
    public $ConsoleSize; //array(int)
    public $Isolation; //String
    public $CpuShares; //int
    public $Memory; //int
    public $NanoCpus; //int
    public $CgroupParent; //String
    public $BlkioWeight; //int
    public $BlkioWeightDevice; //object
    public $BlkioDeviceReadBps; //object
    public $BlkioDeviceWriteBps; //object
    public $BlkioDeviceReadIOps; //object
    public $BlkioDeviceWriteIOps; //object
    public $CpuPeriod; //int
    public $CpuQuota; //int
    public $CpuRealtimePeriod; //int
    public $CpuRealtimeRuntime; //int
    public $CpusetCpus; //String
    public $CpusetMems; //String
    public $Devices; //object
    public $DiskQuota; //int
    public $KernelMemory; //int
    public $MemoryReservation; //int
    public $MemorySwap; //int
    public $MemorySwappiness; //int
    public $OomKillDisable; //boolean
    public $PidsLimit; //int
    public $Ulimits; //object
    public $CpuCount; //int
    public $CpuPercent; //int
    public $IOMaximumIOps; //int
    public $IOMaximumBandwidth; //int
}
