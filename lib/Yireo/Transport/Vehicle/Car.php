<?php

namespace Yireo\Transport\Vehicle;

use Yireo\Transport\Api\PersonInterface;
use Yireo\Transport\Vehicle;
use Yireo\Transport\Person\Driver;

class Car extends Vehicle
{
    protected $wheels = 4;

    public function addPerson(PersonInterface $person)
    {
        if (!$person instanceof Driver) {
            throw new \InvalidArgumentException('Person should be a driver');
        }

        $this->persons[] = $person;
    }
}