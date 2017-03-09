<?php

namespace MayMeow\Docker\Model\Container;

use MayMeow\Docker\Model\BaseModel;

class HostConfig extends BaseModel
{
    public $Binds; //array(String)
    public $Tmpfs; //Tmpfs
    public $Links; //array(String)
    public $Memory; //int
    public $MemorySwap; //int
    public $MemoryReservation; //int
    public $KernelMemory; //int
    public $CpuPercent; //int
    public $CpuShares; //int
    public $CpuPeriod; //int
    public $CpuQuota; //int
    public $CpusetCpus; //String
    public $CpusetMems; //String
    public $IOMaximumBandwidth; //int
    public $IOMaximumIOps; //int
    public $BlkioWeight; //int
    public $BlkioWeightDevice; //array(BlkioWeightDevice)
    public $BlkioDeviceReadBps; //array(BlkioDeviceReadBp)
    public $BlkioDeviceReadIOps; //array(BlkioDeviceReadIOp)
    public $BlkioDeviceWriteBps; //array(BlkioDeviceWriteBp)
    public $BlkioDeviceWriteIOps; //array(BlkioDeviceWriteIOp)
    public $MemorySwappiness; //int
    public $OomKillDisable; //boolean
    public $OomScoreAdj; //int
    public $PidMode; //String
    public $PidsLimit; //int
    public $PortBindings; //PortBindings
    public $PublishAllPorts; //boolean
    public $Privileged; //boolean
    public $ReadonlyRootfs; //boolean
    public $Dns; //array(String)
    public $DnsOptions; //array(String)
    public $DnsSearch; //array(String)
    public $ExtraHosts; //object
    public $VolumesFrom; //array(String)
    public $CapAdd; //array(String)
    public $CapDrop; //array(String)
    public $GroupAdd; //array(String)
    public $RestartPolicy; //RestartPolicy
    public $NetworkMode; //String
    public $Devices; //array(Object)
    public $Sysctls; //Sysctls
    public $Ulimits; //array(Ulimit)
    public $LogConfig; //LogConfig
    public $SecurityOpt; //array(Object)
    public $StorageOpt; //StorageOpt
    public $CgroupParent; //String
    public $VolumeDriver; //String
    public $ShmSize; //int
}
