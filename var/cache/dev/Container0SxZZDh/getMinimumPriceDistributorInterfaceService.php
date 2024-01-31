<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMinimumPriceDistributorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Core\Distributor\MinimumPriceDistributorInterface' shared service.
     *
     * @return \Sylius\Component\Core\Distributor\MinimumPriceDistributor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/MinimumPriceDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/MinimumPriceDistributor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributor.php';

        return $container->services['Sylius\\Component\\Core\\Distributor\\MinimumPriceDistributorInterface'] = new \Sylius\Component\Core\Distributor\MinimumPriceDistributor(($container->services['sylius.proportional_integer_distributor'] ??= new \Sylius\Component\Core\Distributor\ProportionalIntegerDistributor()));
    }
}
