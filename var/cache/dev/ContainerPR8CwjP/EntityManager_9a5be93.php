<?php

namespace ContainerPR8CwjP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1cefa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79c8b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties04f83 = [
        
    ];

    public function getConnection()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getConnection', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getMetadataFactory', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getExpressionBuilder', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'beginTransaction', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getCache', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'transactional', array('func' => $func), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'commit', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->commit();
    }

    public function rollback()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'rollback', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getClassMetadata', array('className' => $className), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'createQuery', array('dql' => $dql), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'createNamedQuery', array('name' => $name), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'createQueryBuilder', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'flush', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'clear', array('entityName' => $entityName), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->clear($entityName);
    }

    public function close()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'close', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->close();
    }

    public function persist($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'persist', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'remove', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'refresh', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'detach', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'merge', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'contains', array('entity' => $entity), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getEventManager', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getConfiguration', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'isOpen', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getUnitOfWork', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getProxyFactory', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'initializeObject', array('obj' => $obj), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'getFilters', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'isFiltersStateClean', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'hasFilters', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return $this->valueHolder1cefa->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer79c8b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1cefa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1cefa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1cefa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__get', ['name' => $name], $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        if (isset(self::$publicProperties04f83[$name])) {
            return $this->valueHolder1cefa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1cefa;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1cefa;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1cefa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1cefa;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__isset', array('name' => $name), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1cefa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1cefa;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__unset', array('name' => $name), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1cefa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1cefa;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__clone', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        $this->valueHolder1cefa = clone $this->valueHolder1cefa;
    }

    public function __sleep()
    {
        $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, '__sleep', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;

        return array('valueHolder1cefa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer79c8b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer79c8b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79c8b && ($this->initializer79c8b->__invoke($valueHolder1cefa, $this, 'initializeProxy', array(), $this->initializer79c8b) || 1) && $this->valueHolder1cefa = $valueHolder1cefa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1cefa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1cefa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
