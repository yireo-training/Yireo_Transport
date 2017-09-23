<?php
namespace Yireo\Transport\Api;

interface WheelInterface
{
    public function getWheels() : int;

    public function hasWheels() : bool;
}