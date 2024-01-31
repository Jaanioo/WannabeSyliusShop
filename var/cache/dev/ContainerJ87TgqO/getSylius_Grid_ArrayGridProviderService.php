<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ArrayGridProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.array_grid_provider' shared service.
     *
     * @return \Sylius\Component\Grid\Provider\ArrayGridProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Provider/GridProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Provider/ArrayGridProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationExtenderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationExtender.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationRemovalsHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Configuration/GridConfigurationRemovalsHandler.php';

        return $container->services['sylius.grid.array_grid_provider'] = new \Sylius\Component\Grid\Provider\ArrayGridProvider(($container->services['sylius.grid.array_to_definition_converter'] ?? $container->load('getSylius_Grid_ArrayToDefinitionConverterService')), $container->parameters['sylius.grids_definitions'], ($container->services['sylius.grid.configuration_extender'] ??= new \Sylius\Component\Grid\Configuration\GridConfigurationExtender()), ($container->services['sylius.grid.configuration_removals_handler'] ??= new \Sylius\Component\Grid\Configuration\GridConfigurationRemovalsHandler()));
    }
}
