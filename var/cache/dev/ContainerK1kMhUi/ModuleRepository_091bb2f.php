<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
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

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getList', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getInstalledModules', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getMustBeConfiguredModules', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getUpgradableModules', array(), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'setActionUrls', array('collection' => $collection), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        return $this->valueHoldere7096->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer8e5fb = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHoldere7096) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldere7096 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHoldere7096->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer8e5fb && ($this->initializer8e5fb->__invoke($valueHoldere7096, $this, '__get', ['name' => $name], $this->initializer8e5fb) || 1) && $this->valueHoldere7096 = $valueHoldere7096;

        if (isset(self::$publicPropertiescae33[$name])) {
            return $this->valueHoldere7096->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
