<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_CustomerAfterCheckoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.customer_after_checkout' shared service.
     *
     * @return \Sylius\Component\Core\Factory\CustomerAfterCheckoutFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/CustomerAfterCheckoutFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/CustomerAfterCheckoutFactory.php';

        return $container->services['sylius.factory.customer_after_checkout'] = new \Sylius\Component\Core\Factory\CustomerAfterCheckoutFactory(($container->services['sylius.factory.customer'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\Customer')));
    }
}
