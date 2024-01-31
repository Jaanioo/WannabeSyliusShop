<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayPalPaymentOnErrorActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\PayPalPaymentOnErrorAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\PayPalPaymentOnErrorAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/PayPalPaymentOnErrorAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\PayPalPaymentOnErrorAction'] = new \Sylius\PayPalPlugin\Controller\PayPalPaymentOnErrorAction(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['monolog.logger.paypal'] ?? $container->load('getMonolog_Logger_PaypalService')));
    }
}
