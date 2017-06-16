<?php
namespace Yireo\Transport;

use Yireo\Transport\Api\TransportInterface;
use Yireo\Transport\Exception\InvalidArgumentException;

abstract class Vehicle extends Entity implements TransportInterface
{
    protected $wheels = 0;

    protected $persons = array();

    protected $hasWheelsModified = false;

    public function __construct($wheels = 0)
    {
        if ($wheels > 0) {
            $this->setWheels($wheels);
        }
    }

    public function hasWheelsModified()
    {
        return $this->hasWheelsModified;
    }

    public function getWheels()
    {
        return $this->wheels;
    }

    private function setWheels($wheels)
    {
        $this->validateWheels($wheels);
        $this->wheels = $wheels;
        $this->hasWheelsModified = true;
    }

    private function validateWheels($wheels)
    {
        if (!is_numeric($wheels)) {
            throw new InvalidArgumentException('Input argument $wheels is not a number');
        }

        if ($wheels < 0) {
            throw new InvalidArgumentException('Input argument $wheels can not lower than 0');
        }

        return true;
    }

    public function hasWheels()
    {
        return ($this->wheels > 0) ? true : false;
    }

    public function __toString()
    {
        return (string)get_class($this);
    }
}