<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompletePayPalOrderActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\CompletePayPalOrderAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\CompletePayPalOrderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/CompletePayPalOrderAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderAction'] = new \Sylius\PayPalPlugin\Controller\CompletePayPalOrderAction(($container->privates['Sylius\\PayPalPlugin\\Manager\\PaymentStateManagerInterface'] ?? $container->load('getPaymentStateManagerInterfaceService')), ($container->services['router'] ?? self::getRouterService($container)), ($container->privates['Sylius\\PayPalPlugin\\Provider\\OrderProviderInterface'] ?? $container->load('getOrderProviderInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\AuthorizeClientApiInterface'] ?? $container->load('getAuthorizeClientApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\CompleteOrderApiInterface'] ?? $container->load('getCompleteOrderApiInterfaceService')));
    }
}
