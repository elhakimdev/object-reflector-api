<?php
namespace Reflector;

use ArrayAccess;
use ReflectionClass;
use ReflectionMethod;
use ReflectionExtension;
use Reflector\Contracts\AbstractReflector;

class Reflector extends AbstractReflector implements ArrayAccess
{
       protected string|object $class;
       public array $attributes;
       // public $constant;
       public array $constants;
       public ReflectionMethod|null $constructor;
       public array $defaultProperties;
       public string|bool $docComment;
       public string $endLine;
       public ReflectionExtension|null $extension;
       public string|bool $extensionName;
       public string|bool $fileName;
       public mixed $interfaceNames;
       public mixed $interfaces;
       // public $method;
       public mixed $methods;
       public int $modifiers;
       public string $name;
       public string $namespaceName;
       public mixed $parentClass;
       public array $properties;
       // public $property;
       // public $reflectionConstant;
       public array $reflectionConstants;
       public string $shortName;
       public int $startLine;
       public array $staticProperties;
       // public $staticPropertyValue;
       public mixed $traitAliases;
       public array $traitNames;
       public array $traits;
       // public bool $hasContant;
       // public bool $hasProperty;
       // public bool $hasMethod;
       // public bool $implementsInterface;
       public bool $inNamespace;
       public bool $isAbstract;
       public bool $isAnonymous;
       public bool $isClonable;
       public bool $isFinal;
       // public bool $isInstance;
       public bool $isInstantiable;
       public bool $isInterface;
       public bool $isInternal;
       public bool $isIterable;
       public bool $isIterateable;
       // public bool $isSubclassof;
       public bool $isTrait;
       public bool $isUserDefined;
       // public $newInstance;
       // public $newInstanceArgs;
       // public $newInstanceWithConstructor;

       public function __construct(string|object $class)
       {
              parent::__construct($class);
              $this->initialize();
       }
       protected function initialize()
       {
              $this->setAttributes();
              $this->setConstants();
              $this->setConstructor();
              $this->setDefaultProperties();
              $this->setDocComment();
              $this->setEndLine();
              $this->setExtension();
              $this->setExtensionName();
              $this->setFileName();
              $this->setInterfaceNames();
              $this->setInterfaces();
              $this->setMethods();
              $this->setModifiers();
              $this->setName();
              $this->setNamespaceName();
              $this->setParentClass();
              $this->setProperties();
              $this->setReflectionConstants();
              $this->setShortName();
              $this->setStartLine();
              $this->setStaticProperties();
              $this->setTraitAliases();
              $this->setTraitNames();
              $this->setTraits();
              $this->setInNamespace();
              $this->setIsAbstract();
              $this->setIsAnonymous();
              $this->setIsClonable();
              $this->setIsFinal();
              $this->setIsInstantiable();
              $this->setIsInterface();
              $this->setIsInternal();
              $this->setIsIterable();
              $this->setIsIterateable();
              $this->setIsTrait();
              $this->setIsUserDefined();
       }

       /**
        * Set the value of attributes
        *
        * @return  self
        */ 
       public function setAttributes()
       {
              $this->attributes = $this->getReflector()->getAttributes();

              return $this;
       }

       /**
        * Set the value of constants
        *
        * @return  self
        */ 
       public function setConstants()
       {
              $this->constants = $this->getReflector()->getConstants();

              return $this;
       }

       /**
        * Set the value of constructor
        *
        * @return  self
        */ 
       public function setConstructor()
       {
              $this->constructor = $this->getReflector()->getConstructor();

              return $this;
       }

       /**
        * Set the value of defaultProperties
        *
        * @return  self
        */ 
       public function setDefaultProperties()
       {
              $this->defaultProperties = $this->getReflector()->getDefaultProperties();

              return $this;
       }

       /**
        * Set the value of docComment
        *
        * @return  self
        */ 
       public function setDocComment()
       {
              $this->docComment = $this->getReflector()->getDocComment();

              return $this;
       }

       /**
        * Set the value of endLine
        *
        * @return  self
        */ 
       public function setEndLine()
       {
              $this->endLine = $this->getReflector()->getEndLine();

              return $this;
       }

       /**
        * Set the value of extension
        *
        * @return  self
        */ 
       public function setExtension()
       {
              $this->extension = $this->getReflector()->getExtension();

              return $this;
       }

       /**
        * Set the value of extensionName
        *
        * @return  self
        */ 
       public function setExtensionName()
       {
              $this->extensionName = $this->getReflector()->getExtensionName();

              return $this;
       }

       /**
        * Set the value of fileName
        *
        * @return  self
        */ 
       public function setFileName()
       {
              $this->fileName = $this->getReflector()->getFileName();

              return $this;
       }

       /**
        * Set the value of interfaceNames
        *
        * @return  self
        */ 
       public function setInterfaceNames()
       {
              $interfaceNames             = [];
              $list                       = $this->getReflector()->getInterfaceNames();
              $totalImplementedInterface  = count($this->getReflector()->getInterfaceNames());

              for ($i=0; $i < $totalImplementedInterface ; $i++) { 
                     $interfaceNames[$list[$i]] = new ReflectionClass($list[$i]);
              }

              $this->interfaceNames = $interfaceNames;

              return $this;
       }

       /**
        * Set the value of interfaces
        *
        * @return  self
        */ 
       public function setInterfaces()
       {
              $this->interfaces = $this->getReflector()->getInterfaces();

              return $this;
       }

       /**
        * Set the value of methods
        *
        * @return  self
        */ 
       public function setMethods()
       {
              $data         = [];
              $methods      = $this->getReflector()->getMethods();

              for ($i=0; $i < count($methods); $i++) { 
                     $data[$methods[$i]->name] = $methods[$i];
              }

              $this->methods       = $data;

              return $this;
       }

       /**
        * Set the value of modifiers
        *
        * @return  self
        */ 
       public function setModifiers()
       {
              $this->modifiers = $this->getReflector()->getModifiers();

              return $this;
       }

       /**
        * Set the value of name
        *
        * @return  self
        */ 
       public function setName()
       {
              $this->name = $this->getReflector()->getName();

              return $this;
       }

       /**
        * Set the value of namespaceName
        *
        * @return  self
        */ 
       public function setNamespaceName()
       {
              $this->namespaceName = $this->getReflector()->getNamespaceName();

              return $this;
       }

       /**
        * Set the value of parentClass
        *
        * @return  self
        */ 
       public function setParentClass()
       {
              $this->parentClass = $this->getReflector()->getParentClass();

              return $this;
       }

       /**
        * Set the value of properties
        *
        * @return  self
        */ 
       public function setProperties()
       {
              $data                = [];
              $properties          = $this->getReflector()->getProperties();
              
              for ($i=0; $i < count($properties); $i++) { 
                     $data[$properties[$i]->name] = $properties[$i];
              }

              $this->properties    = $data;

              return $this;
       }

       /**
        * Set the value of reflectionConstants
        *
        * @return  self
        */ 
       public function setReflectionConstants()
       {
              $data = []; 
              $reflectionConstants = $this->getReflector()->getReflectionConstants();

              for ($i=0; $i < count($reflectionConstants) ; $i++) { 
                     $data[$reflectionConstants[$i]->name] = $reflectionConstants[$i];
              }

              $this->reflectionConstants = $data;

              return $this;
       }

       /**
        * Set the value of shortName
        *
        * @return  self
        */ 
       public function setShortName()
       {
              $this->shortName = $this->getReflector()->getShortName();

              return $this;
       }

       /**
        * Set the value of startLine
        *
        * @return  self
        */ 
       public function setStartLine()
       {
              $this->startLine = $this->getReflector()->getStartLine();

              return $this;
       }

       /**
        * Set the value of staticProperties
        *
        * @return  self
        */ 
       public function setStaticProperties()
       {
              $this->staticProperties = $this->getReflector()->getStaticProperties();

              return $this;
       }

       /**
        * Set the value of traitAliases
        *
        * @return  self
        */ 
       public function setTraitAliases()
       {
              $this->traitAliases = $this->getReflector()->getTraitAliases();

              return $this;
       }

       /**
        * Set the value of inNamespace
        *
        * @return  self
        */ 
       public function setInNamespace()
       {
              $this->inNamespace = $this->getReflector()->inNamespace();

              return $this;
       }

       /**
        * Set the value of isAbstract
        *
        * @return  self
        */ 
       public function setIsAbstract()
       {
              $this->isAbstract = $this->getReflector()->isAbstract();

              return $this;
       }

       /**
        * Set the value of isAnonymous
        *
        * @return  self
        */ 
       public function setIsAnonymous()
       {
              $this->isAnonymous = $this->getReflector()->isAnonymous();

              return $this;
       }

       /**
        * Set the value of isClonable
        *
        * @return  self
        */ 
       public function setIsClonable()
       {
              $this->isClonable = $this->getReflector()->isCloneable();

              return $this;
       }

       /**
        * Set the value of isFinal
        *
        * @return  self
        */ 
       public function setIsFinal()
       {
              $this->isFinal = $this->getReflector()->isFinal();

              return $this;
       }

       /**
        * Set the value of isInstantiable
        *
        * @return  self
        */ 
       public function setIsInstantiable()
       {
              $this->isInstantiable = $this->getReflector()->isInstantiable();

              return $this;
       }

       /**
        * Set the value of isInterface
        *
        * @return  self
        */ 
       public function setIsInterface()
       {
              $this->isInterface = $this->getReflector()->isInterface();

              return $this;
       }

       /**
        * Set the value of isInternal
        *
        * @return  self
        */ 
       public function setIsInternal()
       {
              $this->isInternal = $this->getReflector()->isInternal();

              return $this;
       }

       /**
        * Set the value of isIterable
        *
        * @return  self
        */ 
       public function setIsIterable()
       {
              $this->isIterable = $this->getReflector()->isIterable();

              return $this;
       }

       /**
        * Set the value of isIterateable
        *
        * @return  self
        */ 
       public function setIsIterateable()
       {
              $this->isIterateable = $this->getReflector()->isIterateable();

              return $this;
       }

       /**
        * Set the value of isTrait
        *
        * @return  self
        */ 
       public function setIsTrait()
       {
              $this->isTrait = $this->getReflector()->isTrait();

              return $this;
       }

       /**
        * Set the value of isUserDefined
        *
        * @return  self
        */ 
       public function setIsUserDefined()
       {
              $this->isUserDefined = $this->getReflector()->isUserDefined();

              return $this;
       }

       /**
        * Set the value of traits
        *
        * @return  self
        */ 
       public function setTraits()
       {
              $this->traits = $this->getReflector()->getTraits();

              return $this;
       }

       /**
        * Set the value of traitNames
        *
        * @return  self
        */ 
       public function setTraitNames()
       {
              $this->traitNames = $this->getReflector()->getTraitNames();

              return $this;
       }
       public function offsetExists($offset)
       {
              
       }
       public function offsetGet($offset)
       {
              
       }
       public function offsetSet($offset, $value)
       {
              
       }
       public function offsetUnset($offset)
       {
              
       }
}
