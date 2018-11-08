<?php
/**
 * If you need an environment-specific system or application configuration,
 * there is an example in the documentation
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-system-configuration
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-application-configuration
 */
return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'Zend\Paginator',
        'Zend\Cache',
        'Zend\Serializer',
        'Zend\Db',
        'Zend\Log',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Form',
        'Zend\InputFilter',
        'Zend\Filter',
        'Zend\Hydrator',
        'Zend\I18n',
        'Zend\Session',
        'Zend\Navigation',
        'Zend\Router',
        'Zend\Validator',

        'MSBios\Validator',
        'MSBios\Hydrator',
        'MSBios\Cache',
        'MSBios\Db',
        'MSBios\Form',
        'MSBios\Assetic',
        'MSBios\Theme',
        'MSBios\Widget',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Guard',
        'MSBios\Authentication',
        'MSBios\CPanel',
        'MSBios\Resource',
        'MSBios\Guard\CPanel',
        'MSBios\Guard\Resource',
        'MSBios\Test',
        'ZendDeveloperTools',
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ],
];
