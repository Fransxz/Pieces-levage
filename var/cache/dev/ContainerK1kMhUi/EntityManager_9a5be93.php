<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere7096 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8e5fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescae33 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getConnection', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getMetadataFactory', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getExpressionBuilder', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'beginTransaction', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getCache', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'transactional', array('func' => $func), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'commit', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->commit();
    }

    public function rollback()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'rollback', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getClassMetadata', array('className' => $className), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'createQuery', array('dql' => $dql), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'createNamedQuery', array('name' => $name), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'createQueryBuilder', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'flush', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'clear', array('entityName' => $entityName), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->clear($entityName);
    }

    public function close()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'close', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->close();
    }

    public function persist($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'persist', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'remove', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'refresh', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'detach', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'merge', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'contains', array('entity' => $entity), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getEventManager', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getConfiguration', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'isOpen', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getUnitOfWork', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getProxyFactory', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'initializeObject', array('obj' => $obj), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getFilters', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'isFiltersStateClean', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'hasFilters', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->hasFilters();
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

        $instance->initializer8e5fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere7096) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere7096 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere7096->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__get', ['name' => $name], $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        if (isset(self::$publicPropertiescae33[$name])) {
            return $this->valueHoldere7096->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7096;

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

        $targetObject = $this->valueHoldere7096;
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
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7096;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere7096;
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
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__isset', array('name' => $name), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7096;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere7096;
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
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__unset', array('name' => $name), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7096;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere7096;
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
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__clone', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        $this->valueHoldere7096 = clone $this->valueHoldere7096;
    }

    public function __sleep()
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__sleep', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return array('valueHoldere7096');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8e5fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8e5fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'initializeProxy', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere7096;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere7096;
    }
}
