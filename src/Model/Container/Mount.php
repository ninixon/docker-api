<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/11/2017
 * Time: 6:58 PM
 */

namespace MayMeow\Docker\Model\Container;


class Mount
{
    public $Type; //String
    public $Source; //String
    public $Destination; //String
    public $Mode; //String
    public $RW; //boolean
    public $Propagation;

    /**
     * @param mixed $Type
     * @return Mount
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @param mixed $Source
     * @return Mount
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
        return $this;
    }

    /**
     * @param mixed $Destination
     * @return Mount
     */
    public function setDestination($Destination)
    {
        $this->Destination = $Destination;
        return $this;
    }

    /**
     * @param mixed $Mode
     * @return Mount
     */
    public function setMode($Mode)
    {
        $this->Mode = $Mode;
        return $this;
    }

    /**
     * @param mixed $RW
     * @return Mount
     */
    public function setRW($RW)
    {
        $this->RW = $RW;
        return $this;
    }

    /**
     * @param mixed $Propagation
     * @return Mount
     */
    public function setPropagation($Propagation)
    {
        $this->Propagation = $Propagation;
        return $this;
    } //String


}