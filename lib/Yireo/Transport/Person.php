<?php
namespace Yireo\Transport;

use Yireo\Transport\Api\PersonInterface;

class Person implements PersonInterface
{
    protected $persons = [];

    public function addPerson(PersonInterface $person)
    {
        $this->persons[] = $person;
    }
}