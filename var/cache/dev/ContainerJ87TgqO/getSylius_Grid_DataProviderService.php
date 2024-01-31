<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_DataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.data_provider' shared service.
     *
     * @return \Sylius\Component\Grid\Data\DataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DataProvider.php';

        return $container->services['sylius.grid.data_provider'] = new \Sylius\Component\Grid\Data\DataProvider(($container->services['sylius.grid.data_source_provider'] ?? $container->load('getSylius_Grid_DataSourceProviderService')), ($container->services['sylius.grid.filters_applicator'] ?? $container->load('getSylius_Grid_FiltersApplicatorService')), ($container->services['sylius.grid.sorter'] ?? $container->load('getSylius_Grid_SorterService')));
    }
}