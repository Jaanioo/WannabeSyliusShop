<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridFilter_EntitiesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_filter.entities' shared service.
     *
     * @return \Sylius\Component\Core\Grid\Filter\EntitiesFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Grid/Filter/EntitiesFilter.php';

        return $container->services['sylius.grid_filter.entities'] = new \Sylius\Component\Core\Grid\Filter\EntitiesFilter();
    }
}
