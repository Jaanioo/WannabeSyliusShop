<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_FiltersApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.filters_applicator' shared service.
     *
     * @return \Sylius\Component\Grid\Filtering\FiltersApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersApplicator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersCriteriaResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersCriteriaResolver.php';

        return $container->services['sylius.grid.filters_applicator'] = new \Sylius\Component\Grid\Filtering\FiltersApplicator(($container->services['sylius.registry.grid_filter'] ?? $container->load('getSylius_Registry_GridFilterService')), ($container->services['sylius.grid.filters_criteria_resolver'] ??= new \Sylius\Component\Grid\Filtering\FiltersCriteriaResolver()));
    }
}
