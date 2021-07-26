<?php

namespace Reflector;

use ArrayAccess;
use ReflectionClass;
use ReflectionMethod;
use ReflectionExtension;
use Reflector\Contracts\AbstractClassReflector;

class ClassReflector extends AbstractClassReflector implements ArrayAccess
{
       protected string|object $class;
       /**
        * The class attributes.
        */
       public array $attributes;

       // public $constant;

       /**
        * The class constants.
        */
       public array $constants;

       /** 
        * The class contrustor. 
        */
       public ReflectionMethod|null $constructor;

       /**
        * The class edfault properties.
        */
       public array $defaultProperties;

       /**
        * The class doc comment.
        */
       public string|bool $docComment;

       /** 
        * The class end of line
        */
       public string $endLine;

       /**
        * The class extension.
        */
       public ReflectionExtension|null $extension;

       /**
        * The class extension name.
        */
       public string|bool $extensionName;

       /**
        * The class file name.
        */
       public string|bool $fileName;

       /**
        * The class interfaces name.
        */
       public mixed $interfaceNames;

       /**
        * The class interfaces.
        */
       public mixed $interfaces;

       // public $method;

       /**
        * The class methods.
        */
       public mixed $methods;

       /**
        * The class modifiers.
        */
       public int $modifiers;

       /**
        * The class name.
        */
       public string $name;

       /**
        * The class namespace name.
        */
       public string $namespaceName;

       /**
        * The parent class of this class.
        */
       public mixed $parentClass;

       /**
        * The class properties.
        */
       public array $properties;

       // public $property;
       // public $reflectionConstant;

       /**
        * The class reflection constants.
        */
       public array $reflectionConstants;

       /**
        * The class short name
        */
       public string $shortName;

       /**
        * The class start line.
        */
       public int $startLine;

       /**
        * The class static properties.
        */
       public array $staticProperties;

       // public $staticPropertyValue;

       /**
        * The class trait aliases.
        */
       public mixed $traitAliases;

       /** 
        * The class trait names.
        */
       public array $traitNames;

       /** 
        * The class traits.
        */
       public array $traits;

       // public bool $hasContant;
       // public bool $hasProperty;
       // public bool $hasMethod;
       // public bool $implementsInterface;
       /**
        * Check is the class is in namespace.
        */
       public bool $inNamespace;

       /**
        * Check is the class is abstracts class.
        */
       public bool $isAbstract;

       /**
        * Check is the class is anonymous class.
        */
       public bool $isAnonymous;

       /**
        * Check is the class is clonable class.
        */
       public bool $isClonable;

       /**
        * Check is the class is final class.
        */
       public bool $isFinal;

       // public bool $isInstance;

       /**
        * Check is the class is instantable.
        */
       public bool $isInstantiable;

       /**
        * Check is the class is interface.
        */
       public bool $isInterface;

       /**
        * Check is the class is internal class.
        */
       public bool $isInternal;

       /**
        * Check is the class is iterable class.
        */
       public bool $isIterable;

       /**
        * Check is the class is iteratable class.
        */
       public bool $isIterateable;

       // public bool $isSubclassof;

       /**
        * Check is the class is trait.
        */
       public bool $isTrait;
       /**
        * Check is the class is user defined class.
        */
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
       protected function setAttributes()
       {
              $this->attributes = $this->getReflector()->getAttributes();

              return $this;
       }

       /**
        * Set the value of constants
        *
        * @return  self
        */
       protected function setConstants()
       {
              $this->constants = $this->getReflector()->getConstants();

              return $this;
       }

       /**
        * Set the value of constructor
        *
        * @return  self
        */
       protected function setConstructor()
       {
              $this->constructor = $this->getReflector()->getConstructor();

              return $this;
       }

       /**
        * Set the value of defaultProperties
        *
        * @return  self
        */
       protected function setDefaultProperties()
       {
              $this->defaultProperties = $this->getReflector()->getDefaultProperties();

              return $this;
       }

       /**
        * Set the value of docComment
        *
        * @return  self
        */
       protected function setDocComment()
       {
              $this->docComment = $this->getReflector()->getDocComment();

              return $this;
       }

       /**
        * Set the value of endLine
        *
        * @return  self
        */
       protected function setEndLine()
       {
              $this->endLine = $this->getReflector()->getEndLine();

              return $this;
       }

       /**
        * Set the value of extension
        *
        * @return  self
        */
       protected function setExtension()
       {
              $this->extension = $this->getReflector()->getExtension();

              return $this;
       }

       /**
        * Set the value of extensionName
        *
        * @return  self
        */
       protected function setExtensionName()
       {
              $this->extensionName = $this->getReflector()->getExtensionName();

              return $this;
       }

       /**
        * Set the value of fileName
        *
        * @return  self
        */
       protected function setFileName()
       {
              $this->fileName = $this->getReflector()->getFileName();

              return $this;
       }

       /**
        * Set the value of interfaceNames
        *
        * @return  self
        */
       protected function setInterfaceNames()
       {
              $interfaceNames             = [];
              $list                       = $this->getReflector()->getInterfaceNames();
              $totalImplementedInterface  = count($this->getReflector()->getInterfaceNames());

              for ($i = 0; $i < $totalImplementedInterface; $i++) {
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
       protected function setInterfaces()
       {
              $this->interfaces = $this->getReflector()->getInterfaces();

              return $this;
       }

       /**
        * Set the value of methods
        *
        * @return  self
        */
       protected function setMethods()
       {
              $data         = [];
              $methods      = $this->getReflector()->getMethods();

              for ($i = 0; $i < count($methods); $i++) {
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
       protected function setModifiers()
       {
              $this->modifiers = $this->getReflector()->getModifiers();

              return $this;
       }

       /**
        * Set the value of name
        *
        * @return  self
        */
       protected function setName()
       {
              $this->name = $this->getReflector()->getName();

              return $this;
       }

       /**
        * Set the value of namespaceName
        *
        * @return  self
        */
       protected function setNamespaceName()
       {
              $this->namespaceName = $this->getReflector()->getNamespaceName();

              return $this;
       }

       /**
        * Set the value of parentClass
        *
        * @return  self
        */
       protected function setParentClass()
       {
              $this->parentClass = $this->getReflector()->getParentClass();

              return $this;
       }

       /**
        * Set the value of properties
        *
        * @return  self
        */
       protected function setProperties()
       {
              $data                = [];
              $properties          = $this->getReflector()->getProperties();

              for ($i = 0; $i < count($properties); $i++) {
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
       protected function setReflectionConstants()
       {
              $data = [];
              $reflectionConstants = $this->getReflector()->getReflectionConstants();

              for ($i = 0; $i < count($reflectionConstants); $i++) {
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
       protected function setShortName()
       {
              $this->shortName = $this->getReflector()->getShortName();

              return $this;
       }

       /**
        * Set the value of startLine
        *
        * @return  self
        */
       protected function setStartLine()
       {
              $this->startLine = $this->getReflector()->getStartLine();

              return $this;
       }

       /**
        * Set the value of staticProperties
        *
        * @return  self
        */
       protected function setStaticProperties()
       {
              $this->staticProperties = $this->getReflector()->getStaticProperties();

              return $this;
       }

       /**
        * Set the value of traitAliases
        *
        * @return  self
        */
       protected function setTraitAliases()
       {
              $this->traitAliases = $this->getReflector()->getTraitAliases();

              return $this;
       }

       /**
        * Set the value of inNamespace
        *
        * @return  self
        */
       protected function setInNamespace()
       {
              $this->inNamespace = $this->getReflector()->inNamespace();

              return $this;
       }

       /**
        * Set the value of isAbstract
        *
        * @return  self
        */
       protected function setIsAbstract()
       {
              $this->isAbstract = $this->getReflector()->isAbstract();

              return $this;
       }

       /**
        * Set the value of isAnonymous
        *
        * @return  self
        */
       protected function setIsAnonymous()
       {
              $this->isAnonymous = $this->getReflector()->isAnonymous();

              return $this;
       }

       /**
        * Set the value of isClonable
        *
        * @return  self
        */
       protected function setIsClonable()
       {
              $this->isClonable = $this->getReflector()->isCloneable();

              return $this;
       }

       /**
        * Set the value of isFinal
        *
        * @return  self
        */
       protected function setIsFinal()
       {
              $this->isFinal = $this->getReflector()->isFinal();

              return $this;
       }

       /**
        * Set the value of isInstantiable
        *
        * @return  self
        */
       protected function setIsInstantiable()
       {
              $this->isInstantiable = $this->getReflector()->isInstantiable();

              return $this;
       }

       /**
        * Set the value of isInterface
        *
        * @return  self
        */
       protected function setIsInterface()
       {
              $this->isInterface = $this->getReflector()->isInterface();

              return $this;
       }

       /**
        * Set the value of isInternal
        *
        * @return  self
        */
       protected function setIsInternal()
       {
              $this->isInternal = $this->getReflector()->isInternal();

              return $this;
       }

       /**
        * Set the value of isIterable
        *
        * @return  self
        */
       protected function setIsIterable()
       {
              $this->isIterable = $this->getReflector()->isIterable();

              return $this;
       }

       /**
        * Set the value of isIterateable
        *
        * @return  self
        */
       protected function setIsIterateable()
       {
              $this->isIterateable = $this->getReflector()->isIterateable();

              return $this;
       }

       /**
        * Set the value of isTrait
        *
        * @return  self
        */
       protected function setIsTrait()
       {
              $this->isTrait = $this->getReflector()->isTrait();

              return $this;
       }

       /**
        * Set the value of isUserDefined
        *
        * @return  self
        */
       protected function setIsUserDefined()
       {
              $this->isUserDefined = $this->getReflector()->isUserDefined();

              return $this;
       }

       /**
        * Set the value of traits
        *
        * @return  self
        */
       protected function setTraits()
       {
              $this->traits = $this->getReflector()->getTraits();

              return $this;
       }

       /**
        * Set the value of traitNames
        *
        * @return  self
        */
       protected function setTraitNames()
       {
              $this->traitNames = $this->getReflector()->getTraitNames();

              return $this;
       }
       public function offsetExists($offset)
       {
              //
       }
       public function offsetGet($offset)
       {
              return $this->$offset;
       }
       public function offsetSet($offset, $value)
       {
              //
       }
       public function offsetUnset($offset)
       {
              //
       }

       /**
        * Get the value of constants
        */
       public function getConstants()
       {
              return $this->constants;
       }

       /**
        * Get the value of attributes
        */
       public function getAttributes()
       {
              return $this->attributes;
       }

       /**
        * Get the value of constructor
        */
       public function getConstructor()
       {
              return $this->constructor;
       }

       /**
        * Get the value of defaultProperties
        */
       public function getDefaultProperties()
       {
              return $this->defaultProperties;
       }

       /**
        * Get the value of docComment
        */
       public function getDocComment()
       {
              return $this->docComment;
       }

       /**
        * Get the value of endLine
        */
       public function getEndLine()
       {
              return $this->endLine;
       }

       /**
        * Get the value of extension
        */
       public function getExtension()
       {
              return $this->extension;
       }

       /**
        * Get the value of fileName
        */
       public function getFileName()
       {
              return $this->fileName;
       }

       /**
        * Get the value of interfaces
        */
       public function getInterfaces()
       {
              return $this->interfaces;
       }

       /**
        * Get the value of interfaceNames
        */
       public function getInterfaceNames()
       {
              return $this->interfaceNames;
       }

       /**
        * Get the value of extensionName
        */
       public function getExtensionName()
       {
              return $this->extensionName;
       }

       /**
        * Get the value of properties
        */
       public function getProperties()
       {
              return $this->properties;
       }

       /**
        * Get the value of parentClass
        */
       public function getParentClass()
       {
              return $this->parentClass;
       }

       /**
        * Get the value of namespaceName
        */
       public function getNamespaceName()
       {
              return $this->namespaceName;
       }

       /**
        * Get the value of name
        */
       public function getName()
       {
              return $this->name;
       }

       /**
        * Get the value of reflectionConstants
        */
       public function getReflectionConstants()
       {
              return $this->reflectionConstants;
       }

       /**
        * Get the value of shortName
        */
       public function getShortName()
       {
              return $this->shortName;
       }

       /**
        * Get the value of startLine
        */
       public function getStartLine()
       {
              return $this->startLine;
       }

       /**
        * Get the value of staticProperties
        */
       public function getStaticProperties()
       {
              return $this->staticProperties;
       }

       /**
        * Get the value of isClonable
        */
       public function IsClonable()
       {
              return $this->isClonable;
       }

       /**
        * Get the value of isFinal
        */
       public function IsFinal()
       {
              return $this->isFinal;
       }

       /**
        * Get the value of isAnonymous
        */
       public function IsAnonymous()
       {
              return $this->isAnonymous;
       }

       /**
        * Get the value of isAbstract
        */
       public function IsAbstract()
       {
              return $this->isAbstract;
       }

       /**
        * Get the value of inNamespace
        */
       public function InNamespace()
       {
              return $this->inNamespace;
       }

       /**
        * Get the value of traits
        */
       public function getTraits()
       {
              return $this->traits;
       }

       /**
        * Get the value of traitNames
        */
       public function getTraitNames()
       {
              return $this->traitNames;
       }

       /**
        * Get the value of traitAliases
        */
       public function getTraitAliases()
       {
              return $this->traitAliases;
       }

       /**
        * Get the value of isIterateable
        */
       public function IsIterateable()
       {
              return $this->isIterateable;
       }

       /**
        * Get the value of isIterable
        */
       public function IsIterable()
       {
              return $this->isIterable;
       }

       /**
        * Get the value of isInternal
        */
       public function IsInternal()
       {
              return $this->isInternal;
       }

       /**
        * Get the value of isInterface
        */
       public function IsInterface()
       {
              return $this->isInterface;
       }

       /**
        * Get the value of isInstantiable
        */
       public function IsInstantiable()
       {
              return $this->isInstantiable;
       }

       /**
        * Get the value of isUserDefined
        */
       public function IsUserDefined()
       {
              return $this->isUserDefined;
       }

       /**
        * Get the value of isTrait
        */
       public function IsTrait()
       {
              return $this->isTrait;
       }
}
