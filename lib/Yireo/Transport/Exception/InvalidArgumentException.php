<?php
namespace Yireo\Transport\Exception;

class InvalidArgumentException extends \InvalidArgumentException
{
    public function getLogMessage()
    {
        return get_class($this) . ": " . $this->getMessage() . ' - ' . $this->getTraceAsString();
    }
}