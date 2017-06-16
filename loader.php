<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/lib/' . str_replace("\\", "/", $class) . '.php';
    include_once ($path);
});

include_once 'vendor/autoload.php';