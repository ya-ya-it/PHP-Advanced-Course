<?php

// depencencies in the autoload
require __DIR__.'/vendor/autoload.php';

// use only namespace (declared inside the autoload)
use \Nubs\RandomNameGenerator\All as Random;
use App\Logger;

$randomName = Random::create();
$logger = new Logger();
$logger->save($randomName->getName());
echo $logger->log($randomName->getName());
echo $logger->print($randomName->getName());
echo $logger->count();