<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Http\Request;
use Reflector\Inspector;

$getSecondIndexMethodFromParentClass = Inspector::class(Request::class)->getParentClass()->getMethods()[3]->getParameters();
dump($getSecondIndexMethodFromParentClass);