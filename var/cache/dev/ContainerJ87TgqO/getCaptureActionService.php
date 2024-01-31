<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCaptureActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Payum\Action\CaptureAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Payum\Action\CaptureAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Payum/Action/CaptureAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/CreateOrderApiInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/CreateOrderApi.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentReferenceNumberProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentReferenceNumberProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/UuidProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/UuidProvider.php';

        return $container->services['Sylius\\PayPalPlugin\\Payum\\Action\\CaptureAction'] = new \Sylius\PayPalPlugin\Payum\Action\CaptureAction(($container->privates['Sylius\\PayPalPlugin\\Api\\CacheAuthorizeClientApiInterface'] ?? $container->load('getCacheAuthorizeClientApiInterfaceService')), new \Sylius\PayPalPlugin\Api\CreateOrderApi(($container->privates['Sylius\\PayPalPlugin\\Client\\PayPalClientInterface'] ?? $container->load('getPayPalClientInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentReferenceNumberProviderInterface'] ??= new \Sylius\PayPalPlugin\Provider\PaymentReferenceNumberProvider()), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PayPalItemDataProviderInterface'] ?? $container->load('getPayPalItemDataProviderInterfaceService'))), ($container->privates['Sylius\\PayPalPlugin\\Provider\\UuidProviderInterface'] ??= new \Sylius\PayPalPlugin\Provider\UuidProvider()));
    }
}