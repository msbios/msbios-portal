<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Portal;

use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class Module
 * @package MSBios\Portal
 */
class Module implements ModuleInterface, AutoloaderProviderInterface
{

    /** @const VERSION */
    const VERSION = '1.0.7';


    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }//end getConfig()


    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
                AutoloaderFactory::STANDARD_AUTOLOADER => [
                                                           StandardAutoloader::LOAD_NS => [__NAMESPACE__ => __DIR__],
                                                          ],
               ];
    }//end getAutoloaderConfig()
}//end class
