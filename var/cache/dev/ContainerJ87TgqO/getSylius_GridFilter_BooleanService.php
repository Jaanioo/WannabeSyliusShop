<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridFilter_BooleanService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_filter.boolean' shared service.
     *
     * @return \Sylius\Component\Grid\Filter\BooleanFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/BooleanFilter.php';

        return $container->services['sylius.grid_filter.boolean'] = new \Sylius\Component\Grid\Filter\BooleanFilter();
    }
}
