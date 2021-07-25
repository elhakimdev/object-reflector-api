<?php
namespace Reflector\Contracts;

use ReflectionClass;
use Reflector\Contracts\ReflectorContract;

abstract class AbstractReflector implements ReflectorContract
{
       /**@var string|object $class */
       protected string|object $class;

       /**@var \ReflectionClass $reflector*/
       private $reflector;

       public function __construct(string|object $class)
       {
              $this->setReflector($class);
       }
       /**
        * Set the value of reflector
        *
        * @return  self
        */ 
       public function setReflector(string|object $class)
       {
              $this->reflector = new ReflectionClass($class);

              return $this;
       }

       /**
        * Get the value of reflector
        */ 
       public function getReflector()
       {
              return $this->reflector;
       }
}
