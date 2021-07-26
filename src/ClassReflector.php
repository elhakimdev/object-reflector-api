<?php

namespace Reflector;

use Reflector\Concerns\BaseClassReflector;

/**
 * @method getAttributes(string $name = null, int $flags = 0): array
 * @method getConstant(string $name): mixed
 * @method getConstants(?int $filter = null): array
 * @method getConstructor(): ?ReflectionMethod
 * @method getDefaultProperties(): array
 * @method getDocComment(): string|false
 * @method getEndLine(): int|false
 * @method getExtension(): ?ReflectionExtension
 * @method getExtensionName(): string|false
 * @method getFileName(): string|false
 * @method getInterfaceNames(): array
 * @method getInterfaces(): array
 * @method getMethod(string $name): ReflectionMethod
 * @method getMethods(?int $filter = null): array
 * @method getModifiers(): int
 * @method getName(): string
 * @method getNamespaceName(): string
 * @method getParentClass(): ReflectionClass|false
 * @method getProperties(?int $filter = null): array
 * @method getProperty(string $name): ReflectionProperty
 * @method getReflectionConstant(string $name): ReflectionClassConstant|false
 * @method getReflectionConstants(?int $filter = null): array
 * @method getShortName(): string
 * @method getStartLine(): int|false
 * @method getStaticProperties(): ?array
 * @method getStaticPropertyValue(string $name, mixed &$def_value = ?): mixed
 * @method getTraitAliases(): array
 * @method getTraitNames(): array
 * @method getTraits(): array
 * @method hasConstant(string $name): bool
 * @method hasMethod(string $name): bool
 * @method hasProperty(string $name): bool
 * @method implementsInterface(ReflectionClass|string $interface): bool
 * @method inNamespace(): bool
 * @method isAbstract(): bool
 * @method isAnonymous(): bool
 * @method isCloneable(): bool
 * @method isFinal(): bool
 * @method isInstance(object $object): bool
 * @method isInstantiable(): bool
 * @method isInterface(): bool
 * @method isInternal(): bool
 * @method isIterable(): bool
 * @method isSubclassOf(ReflectionClass|string $class): bool
 * @method isTrait(): bool
 * @method isUserDefined(): bool
 * @method newInstance(mixed ...$args): object
 * @method newInstanceArgs(array $args = []): object
 * @method newInstanceWithoutConstructor(): object
 * @method setStaticPropertyValue(string $name, mixed $value): void
 */
class ClassReflector extends BaseClassReflector
{
       public function __construct(object|string $objectOrClass)
       {
              parent::__construct($objectOrClass);
              $this->initialize();
       }
       private function initialize()
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
              $this->setinNamespace();
              $this->setisAbstract();
              $this->setisAnonymous();
              $this->setisCloneable();
              $this->setisFinal();
              $this->setisIterable();
              $this->setisTrait();
              $this->setisUserDefined();
              // $this->setConstant();
              // $this->setMethod();
              // $this->setProperty();
              // $this->setReflectionConstant();
              // $this->setStaticPropertyValue();
              // $this->sethasConstant();
              // $this->sethasMethod();
              // $this->sethasProperty();
              // $this->setimplementsInterface();
              // $this->setisInstance();
              // $this->setisIterateable();
              // $this->setisSubclassOf();
       }
}
