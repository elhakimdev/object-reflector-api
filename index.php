<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Reflector\Inspector;

$containerReflection = Inspector::class(Request::class);
dump($containerReflection);