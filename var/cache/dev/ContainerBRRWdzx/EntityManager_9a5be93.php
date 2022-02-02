<?php

namespace ContainerBRRWdzx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder463cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9cf15 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties11da7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getConnection', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getMetadataFactory', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getExpressionBuilder', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'beginTransaction', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getCache', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'transactional', array('func' => $func), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'commit', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->commit();
    }

    public function rollback()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'rollback', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getClassMetadata', array('className' => $className), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'createQuery', array('dql' => $dql), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'createNamedQuery', array('name' => $name), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'createQueryBuilder', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'flush', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'clear', array('entityName' => $entityName), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->clear($entityName);
    }

    public function close()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'close', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->close();
    }

    public function persist($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'persist', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'remove', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'refresh', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'detach', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'merge', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'contains', array('entity' => $entity), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getEventManager', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getConfiguration', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'isOpen', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getUnitOfWork', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getProxyFactory', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'initializeObject', array('obj' => $obj), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'getFilters', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'isFiltersStateClean', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'hasFilters', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return $this->valueHolder463cf->hasFilters();
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

        $instance->initializer9cf15 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder463cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder463cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder463cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__get', ['name' => $name], $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        if (isset(self::$publicProperties11da7[$name])) {
            return $this->valueHolder463cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder463cf;

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

        $targetObject = $this->valueHolder463cf;
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
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder463cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder463cf;
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
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__isset', array('name' => $name), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder463cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder463cf;
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
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__unset', array('name' => $name), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder463cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder463cf;
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
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__clone', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        $this->valueHolder463cf = clone $this->valueHolder463cf;
    }

    public function __sleep()
    {
        $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, '__sleep', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;

        return array('valueHolder463cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9cf15 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9cf15;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9cf15 && ($this->initializer9cf15->__invoke($valueHolder463cf, $this, 'initializeProxy', array(), $this->initializer9cf15) || 1) && $this->valueHolder463cf = $valueHolder463cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder463cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder463cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
