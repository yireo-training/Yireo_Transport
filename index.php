<?php
include_once 'loader.php';

use Yireo\Transport\Vehicle\Bicycle;
use Yireo\Transport\Exception\InvalidArgumentException;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$wheels = '4test';
$wheels = 2;

try {
    $bicycle = new Bicycle($wheels);
    echo $bicycle->getWheels() . "\n";

} catch (InvalidArgumentException $e) {
    echo "Error logged\n";
    $stream = new StreamHandler('debug.log');
    $logger = new Logger('Yireo_Transport', [$stream]);
    $logger->notice($e->getLogMessage());
}

echo "End\n";