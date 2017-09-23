<?php

namespace Yireo\Transport;

class Entity
{
    public function __toString() : string
    {
        return (string)get_class($this);
    }
}