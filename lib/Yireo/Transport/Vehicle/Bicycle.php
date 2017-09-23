<?php
namespace Yireo\Transport\Vehicle;

use Yireo\Transport\Api\PersonInterface;
use Yireo\Transport\Vehicle;
use Yireo\Transport\Person\Cyclist;

class Bicycle extends Vehicle
{
    protected $wheels = 2;

    public function addPerson(PersonInterface $person)
    {
        if (!$person instanceof Cyclist) {
            throw new \InvalidArgumentException('Person should be a driver');
        }

        $this->persons[] = $person;
    }
}