<?php
class Car extends Vehicle {
    protected $wheels = 4;

    public function addPerson() {
        $this->persons[] = new Driver;
    }
}