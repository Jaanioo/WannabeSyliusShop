<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ConfigurationRemovalsHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.configuration_removals_handler' shared service.
     *
     * @return \Sylius\Component\Grid\Configuration\GridConfigurationRemovalsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationRemovalsHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationRemovalsHandler.php';

        return $container->services['sylius.grid.configuration_removals_handler'] = new \Sylius\Component\Grid\Configuration\GridConfigurationRemovalsHandler();
    }
}
