<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayPalItemDataProviderInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Provider\PayPalItemDataProviderInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Provider\PayPalItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PayPalItemDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PayPalItemDataProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/OrderItemNonNeutralTaxesProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/OrderItemNonNeutralTaxesProvider.php';

        return $container->privates['Sylius\\PayPalPlugin\\Provider\\PayPalItemDataProviderInterface'] = new \Sylius\PayPalPlugin\Provider\PayPalItemDataProvider(new \Sylius\PayPalPlugin\Provider\OrderItemNonNeutralTaxesProvider());
    }
}