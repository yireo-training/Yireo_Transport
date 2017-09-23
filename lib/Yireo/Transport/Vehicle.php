<?php
namespace Yireo\Transport;

use Yireo\Transport\Api\TransportInterface;
use Yireo\Transport\Api\WheelInterface;
use Yireo\Transport\Exception\InvalidArgumentException;

abstract class Vehicle extends Entity implements TransportInterface, WheelInterface
{
    protected $persons = array();

    protected $wheels = 0;

    protected $hasWheelsModified = false;

    public function __construct($wheels = 0)
    {
        if ($wheels > 0) {
            $this->setWheels($wheels);
        }
    }

    public function hasWheelsModified() : bool
    {
        return $this->hasWheelsModified;
    }

    public function getWheels() : int
    {
        return $this->wheels;
    }

    private function setWheels(int $wheels)
    {
        $this->validateWheels($wheels);
        $this->wheels = $wheels;
        $this->hasWheelsModified = true;
    }

    private function validateWheels(int $wheels)
    {
        if ($wheels < 0) {
            throw new InvalidArgumentException('Input argument $wheels can not lower than 0');
        }

        return true;
    }

    public function hasWheels() : bool
    {
        return ($this->wheels > 0) ? true : false;
    }
}