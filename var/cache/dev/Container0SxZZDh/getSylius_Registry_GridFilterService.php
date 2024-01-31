<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Registry_GridFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.registry.grid_filter' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Grid/Filter/EntitiesFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Grid/Filter/ResourceAutocompleteFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/StringFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/BooleanFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/DateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/EntityFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/ExistsFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/SelectFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/MoneyFilter.php';

        $container->services['sylius.registry.grid_filter'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Grid\\Filtering\\FilterInterface', 'grid filter');

        $instance->register('entities', ($container->services['sylius.grid_filter.entities'] ??= new \Sylius\Component\Core\Grid\Filter\EntitiesFilter()));
        $instance->register('resource_autocomplete', ($container->services['sylius.grid_filter.resource_autocomplete'] ??= new \Sylius\Component\Core\Grid\Filter\ResourceAutocompleteFilter()));
        $instance->register('string', ($container->services['sylius.grid_filter.string'] ??= new \Sylius\Component\Grid\Filter\StringFilter()));
        $instance->register('boolean', ($container->services['sylius.grid_filter.boolean'] ??= new \Sylius\Component\Grid\Filter\BooleanFilter()));
        $instance->register('date', ($container->services['sylius.grid_filter.date'] ??= new \Sylius\Component\Grid\Filter\DateFilter()));
        $instance->register('entity', ($container->services['sylius.grid_filter.entity'] ??= new \Sylius\Component\Grid\Filter\EntityFilter()));
        $instance->register('exists', ($container->services['sylius.grid_filter.exists'] ??= new \Sylius\Component\Grid\Filter\ExistsFilter()));
        $instance->register('select', ($container->services['sylius.grid_filter.select'] ??= new \Sylius\Component\Grid\Filter\SelectFilter()));
        $instance->register('money', ($container->services['sylius.grid_filter.money'] ??= new \Sylius\Component\Grid\Filter\MoneyFilter()));
        $instance->register('shop_string', ($container->services['sylius.grid_filter.shop_string'] ??= new \Sylius\Component\Grid\Filter\StringFilter()));

        return $instance;
    }
}
