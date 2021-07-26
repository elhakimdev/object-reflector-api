<?php

namespace Reflector\Concerns;

use ReflectionClass;
use ReflectionClassConstant;
use ReflectionExtension;
use ReflectionMethod;
use ReflectionProperty;
use Reflector\Contracts\AbstractClassReflector;

class BaseClassReflector extends AbstractClassReflector
{
       protected array $Attributes;
       protected mixed $Constant;
       protected array $Constants;
       protected ?ReflectionMethod $Constructor;
       protected array $DefaultProperties;
       protected string|false $DocComment;
       protected string|false $EndLine;
       protected ?ReflectionExtension $Extension;
       protected string|false $ExtensionName;
       protected string|false $FileName;
       protected array $InterfaceNames;
       protected array $Interfaces;
       protected ?ReflectionMethod $Method;
       protected array $Methods;
       protected int $Modifiers;
       protected string $Name;
       protected string $NamespaceName;
       protected ReflectionClass|false $ParentClass;
       protected array $Properties;
       protected ReflectionProperty $Property;
       protected ReflectionClassConstant|false $ReflectionConstant;
       protected array $ReflectionConstants;
       protected string $ShortName;
       protected int|false $StartLine;
       protected mixed $StaticProperties;
       protected mixed $StaticPropertyValue;
       protected array $TraitAliases;
       protected array $TraitNames;
       protected array $Traits;
       protected bool $hasConstant;
       protected bool $hasMethod;
       protected bool $hasProperty;
       protected bool $implementsInterface;
       protected bool $inNamespace;
       protected bool $isAbstract;
       protected bool $isAnonymous;
       protected bool $isCloneable;
       protected bool $isFinal;
       protected bool $isInstance;
       protected bool $isInstantiable;
       protected bool $isInterface;
       protected bool $isInternal;
       protected bool $isIterable;
       protected bool $isIterateable;
       protected bool $isSubclassOf;
       protected bool $isTrait;
       protected bool $isUserDefined;
       protected $setStaticPropertyValue;
       protected object $newInstance;
       protected object $newInstanceArgs;
       protected object $newInstanceWithoutConstructor;


       public function __construct(object|string $objectOrClass)
       {
              parent::__construct($objectOrClass);
       }
       public static function export(mixed $argument, bool $return = false): string
       {
              return static::export($argument, $return);
       }
       public  function __toString()
       {
       }

       #####################################################################
       # Setter
       #####################################################################

       protected function setAttributes(string $name = null, int $flags = 0): void
       {
              $this->Attributes = $this->getReflector()->getAttributes($name, $flags);
       }
       protected function setConstant(?string $name = null): void
       {
              $this->Constant[$name] = $this->getReflector()->getConstant($name);
       }
       protected function setConstants(?int $filter = null): void
       {
              $this->Constants = $this->getReflector()->getConstants($filter);
       }
       protected function setConstructor(): void
       {
              $this->Constructor = $this->getReflector()->getConstructor();
       }
       protected function setDefaultProperties(): void
       {
              $this->DefaultProperties = $this->getReflector()->getDefaultProperties();
       }
       protected function setDocComment(): void
       {
              $this->DocComment = $this->getReflector()->getDocComment();
       }
       protected function setEndLine(): void
       {
              $this->EndLine = $this->getReflector()->getEndLine();
       }
       protected function setExtension(): void
       {
              $this->Extension = $this->getReflector()->getExtension();
       }
       protected function setExtensionName(): void
       {
              $this->ExtensionName = $this->getReflector()->getExtensionName();
       }
       protected function setFileName(): void
       {
              $this->FileName = $this->getReflector()->getFileName();
       }
       protected function setInterfaceNames(): void
       {
              $this->InterfaceNames = $this->getReflector()->getInterfaceNames();
       }
       protected function setInterfaces(): void
       {
              $this->Interfaces = $this->getReflector()->getInterfaces();
       }
       protected function setMethod(?string $name = null): void
       {
              $this->Method[$name] = $this->getReflector()->getMethod($name);
       }
       protected function setMethods(?int $filter = null): void
       {
              $this->Methods = $this->getReflector()->getMethods($filter);
       }
       protected function setModifiers(): void
       {
              $this->Modifiers = $this->getReflector()->getModifiers();
       }
       protected function setName(): void
       {
              $this->Name = $this->getReflector()->getName();
       }
       protected function setNamespaceName(): void
       {
              $this->NamespaceName = $this->getReflector()->getNamespaceName();
       }
       protected function setParentClass(): void
       {
              $this->ParentClass = $this->getReflector()->getParentClass();
       }
       protected function setProperties(?int $filter = null): void
       {
              $this->Properties = $this->getReflector()->getProperties($filter);
       }
       protected function setProperty(?string $name = null): void
       {
              $this->Property[$name] = $this->getReflector()->getProperty($name);
       }
       protected function setReflectionConstant(?string $name = null): void
       {
              $this->ReflectionConstant[$name] = $this->getReflector()->getReflectionConstant($name);
       }
       protected function setReflectionConstants(?int $filter = null): void
       {
              $this->ReflectionConstants = $this->getReflector()->getReflectionConstants($filter);
       }
       protected function setShortName(): void
       {
              $this->ShortName = $this->getReflector()->getShortName();
       }
       protected function setStartLine(): void
       {
              $this->StartLine = $this->getReflector()->getStartLine();
       }
       protected function setStaticProperties(): void
       {
              $this->StaticProperties = $this->getReflector()->getStaticProperties();
       }
       protected function setStaticPropertyValue(?string $name = null, mixed $default = null): void
       {
              $this->StaticPropertyValue[$name] = $this->getReflector()->getStaticPropertyValue($name, $default);
       }
       protected function setTraitAliases(): void
       {
              $this->TraitAliases = $this->getReflector()->getTraitAliases();
       }
       protected function setTraitNames(): void
       {
              $this->TraitNames = $this->getReflector()->getTraitNames();
       }
       protected function setTraits(): void
       {
              $this->Traits = $this->getReflector()->getTraits();
       }
       protected function sethasConstant(?string $name = null): void
       {
              $this->hasConstant[$name] = $this->getReflector()->hasConstant($name);
       }
       protected function sethasMethod(?string $name = null): void
       {
              $this->hasMethod[$name] = $this->getReflector()->hasMethod($name);
       }
       protected function sethasProperty(?string $name = null): void
       {
              $this->hasProperty[$name] = $this->getReflector()->hasProperty($name);
       }
       protected function setimplementsInterface(ReflectionClass|string $interface = null): void
       {
              $this->implementsInterface[$interface] = $this->getReflector()->implementsInterface($interface);
       }
       protected function setinNamespace(): void
       {
              $this->inNamespace = $this->getReflector()->inNamespace();
       }
       protected function setisAbstract(): void
       {
              $this->isAbstract = $this->getReflector()->isAbstract();
       }
       protected function setisAnonymous(): void
       {
              $this->isAnonymous = $this->getReflector()->isAnonymous();
       }
       protected function setisCloneable(): void
       {
              $this->isCloneable = $this->getReflector()->isCloneable();
       }
       protected function setisFinal(): void
       {
              $this->isFinal = $this->getReflector()->isFinal();
       }
       protected function setisInstance(?object $object = null): void
       {
              $this->isInstance = $this->getReflector()->isInstance($object);
       }
       protected function setisInstantiable(): void
       {
              $this->isInstantiable = $this->getReflector()->isInstantiable();
       }
       protected function setisInterface(): void
       {
              $this->isInterface = $this->getReflector()->isInterface();
       }
       protected function setisInternal(): void
       {
              $this->isInternal = $this->getReflector()->isInternal();
       }
       protected function setisIterable(): void
       {
              $this->isIterable = $this->getReflector()->isIterable();
       }
       protected function setisSubclassOf(ReflectionClass|string $class = null): void
       {
              $this->isSubclassOf = $this->getReflector()->isSubclassOf($class);
       }
       protected function setisTrait(): void
       {
              $this->isTrait = $this->getReflector()->isTrait();
       }
       protected function setisUserDefined(): void
       {
              $this->isUserDefined = $this->getReflector()->isUserDefined();
       }
       protected function setnewInstance(mixed ...$args): void
       {
              $this->newInstance[$args] = $this->getReflector()->newInstance($args);
       }
       protected function setnewInstanceArgs(array $args = []): void
       {
              $this->newInstanceArgs[$args] = $this->getReflector()->newInstanceArgs($args);
       }
       protected function setnewInstanceWithoutConstructor(): void
       {
              $this->newInstanceWithoutConstructor = $this->getReflector()->newInstanceWithoutConstructor();
       }
       ##########################################################################
       # Getter
       ##########################################################################
       public function getAttributes(string $name = null, int $flags = 0): array
       {
              return $this->Attributes;
       }
       public function getConstant(string $name): mixed
       {
              return $this->Constant[$name];
       }
       public function getConstants(?int $filter = null): array
       {
              return $this->Constants;
       }
       public function getConstructor(): ?ReflectionMethod
       {
              return $this->Constructor;
       }
       public function getDefaultProperties(): array
       {
              return $this->DefaultProperties;
       }
       public function getDocComment(): string|false
       {
              return $this->DocComment;
       }
       public function getEndLine(): int|false
       {
              return $this->EndLine;
       }
       public function getExtension(): ?ReflectionExtension
       {
              return $this->Extension;
       }
       public function getExtensionName(): string|false
       {
              return $this->ExtensionName;
       }
       public function getFileName(): string|false
       {
              return $this->FileName;
       }
       public function getInterfaceNames(): array
       {
              return $this->InterfaceNames;
       }
       public function getInterfaces(): array
       {
              return $this->Interfaces;
       }
       public function getMethod(string $name): ReflectionMethod
       {
              return $this->Method[$name];
       }
       public function getMethods(?int $filter = null): array
       {
              return $this->Methods[$filter];
       }
       public function getModifiers(): int
       {
              return $this->Modifiers;
       }
       public function getName(): string
       {
              return $this->Name;
       }
       public function getNamespaceName(): string
       {
              return $this->NamespaceName;
       }
       public function getParentClass(): ReflectionClass|false
       {
              return $this->ParentClass;
       }
       public function getProperties(?int $filter = null): array|ReflectionProperty
       {
              return $this->Properties[$filter];
       }
       public function getProperty(string $name): ReflectionProperty
       {
              return $this->Property[$name];
       }
       public function getReflectionConstant(string $name): ReflectionClassConstant|false
       {
              return $this->ReflectionConstant[$name];
       }
       public function getReflectionConstants(?int $filter = null): array
       {
              return $this->ReflectionConstants[$filter];
       }
       public function getShortName(): string
       {
              return $this->ShortName;
       }
       public function getStartLine(): int|false
       {
              return $this->StartLine;
       }
       public function getStaticProperties(): ?array
       {
              return $this->StaticProperties;
       }
       public function getStaticPropertyValue(string $name): mixed
       {
              return $this->StaticPropertyValue[$name];
       }
       public function getTraitAliases(): array
       {
              return $this->TraitAliases;
       }
       public function getTraitNames(): array
       {
              return $this->TraitNames;
       }
       public function getTraits(): array
       {
              return $this->Traits;
       }
       public function hasConstant(string $name): bool
       {
              return $this->hasConstant[$name];
       }
       public function hasMethod(string $name): bool
       {
              return $this->hasMethod[$name];
       }
       public function hasProperty(string $name): bool
       {
              return $this->hasProperty[$name];
       }
       public  function implementsInterface(ReflectionClass|string $interface): bool
       {
              return $this->implementsInterface[$interface];
       }
       public  function inNamespace(): bool
       {
              return $this->inNamespace;
       }
       public  function isAbstract(): bool
       {
              return $this->isAbstract;
       }
       public  function isAnonymous(): bool
       {
              return $this->isAnonymous;
       }
       public  function isCloneable(): bool
       {
              return $this->isCloneable;
       }
       public  function isFinal(): bool
       {
              return $this->isFinal;
       }
       public  function isInstance(object $object): bool
       {
              return $this->isInstance;
       }
       public  function isInstantiable(): bool
       {
              return $this->isInstantiable;
       }
       public  function isInterface(): bool
       {
              return $this->isInterface;
       }
       public  function isInternal(): bool
       {
              return $this->isInternal;
       }
       public  function isIterable(): bool
       {
              return $this->isIterable;
       }
       public  function isSubclassOf(ReflectionClass|string $class): bool
       {
              return $this->isSubclassOf;
       }
       public  function isTrait(): bool
       {
              return $this->isTrait;
       }
       public  function isUserDefined(): bool
       {
              return $this->isUserDefined;
       }
       public  function newInstance(mixed ...$args): object
       {
              return $this->newInstance[$args];
       }
       public  function newInstanceArgs(array $args = []): object
       {
              return $this->newInstanceArgs[$args];
       }
       public  function newInstanceWithoutConstructor(): object
       {
              return $this->newInstanceWithoutConstructor;
       }
}
