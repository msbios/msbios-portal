<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Portal;

use MSBios\ModuleInterface;

/**
 * Class Module
 * @package MSBios\Portal
 */
class Module implements ModuleInterface
{
    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return __DIR__ . '/../config/module.config.php';
    }
}