<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ChainProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.chain_provider' shared service.
     *
     * @return \Sylius\Component\Grid\Provider\ChainProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Provider/GridProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Provider/ChainProvider.php';

        return $container->services['sylius.grid.chain_provider'] = new \Sylius\Component\Grid\Provider\ChainProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['sylius.grid.service_grid_provider'] ?? $container->load('getSylius_Grid_ServiceGridProviderService'));
            yield 1 => ($container->services['sylius.grid.array_grid_provider'] ?? $container->load('getSylius_Grid_ArrayGridProviderService'));
        }, 2));
    }
}
