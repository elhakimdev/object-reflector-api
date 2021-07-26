<?php

namespace Reflector;

use Reflector\ClassReflector;

class Inspector
{
       /**
        * Inspect given class using Reflection.
        * 
        * @param string|object $class The string or class object that need to inspect.
        */
       public static function class(string|object $class)
       {
              return new ClassReflector($class);
       }
       public static function classConstant()
       {
       }
       public static function function()
       {
       }
}
