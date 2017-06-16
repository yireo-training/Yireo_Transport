<?php
namespace Yireo\Transport\Vehicle;

use Yireo\Transport\Vehicle;

class Bicycle extends Vehicle
{
    protected $wheels = 2;

    public function addPerson()
    {
        $this->persons[] = new Cyclist;
    }
}