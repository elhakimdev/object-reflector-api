<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\Instantiator\Instantiator;
use Reflector\Reflector;
use Reflector\Utils\Utility;
use Symfony\Component\VarDumper\VarDumper;

$reflector = new Reflector(Instantiator::class);
dump($reflector);