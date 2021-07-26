<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\Instantiator\Instantiator;
use Reflector\ClassReflector;
use Reflector\Inspector;

$reflector = Inspector::class(ClassReflector::class);
dump($reflector);