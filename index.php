<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\Instantiator\Instantiator;
use Reflector\ClassReflector;

$reflector = new ClassReflector(Instantiator::class);
dump($reflector);