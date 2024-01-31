<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultPaymentMethodResolverInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Payment\Resolver\DefaultPaymentMethodResolverInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Resolver\PayPalDefaultPaymentMethodResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Payment/Resolver/DefaultPaymentMethodResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Resolver/PayPalDefaultPaymentMethodResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Resolver/DefaultPaymentMethodResolver.php';

        $a = ($container->services['sylius.repository.payment_method'] ?? self::getSylius_Repository_PaymentMethodService($container));

        if (isset($container->services['Sylius\\Component\\Payment\\Resolver\\DefaultPaymentMethodResolverInterface'])) {
            return $container->services['Sylius\\Component\\Payment\\Resolver\\DefaultPaymentMethodResolverInterface'];
        }

        return $container->services['Sylius\\Component\\Payment\\Resolver\\DefaultPaymentMethodResolverInterface'] = new \Sylius\PayPalPlugin\Resolver\PayPalDefaultPaymentMethodResolver(new \Sylius\Component\Core\Resolver\DefaultPaymentMethodResolver($a), $a);
    }
}
