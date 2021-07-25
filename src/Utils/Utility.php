<?php
namespace Reflector\Utils;

use Reflector\Utils\HasValuableKey as traits;

class Utility extends StringUtility implements UtilityInterface
{
       use traits;
       public const CLASS_EVENTS = 1;
       private $propertiesWithoutAccess;
       public string $property;
       public array $meta;
       public mixed $vendor;
       public bool $app;
       static bool $isvaluable;
       public function make()
       {
       }
       public static function staticFunction()
       {
       }
}
