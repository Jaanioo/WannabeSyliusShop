<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentStateManagerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Manager\PaymentStateManagerInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Manager\PaymentStateManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Manager/PaymentStateManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Manager/PaymentStateManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PaymentCompleteProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PayPalPaymentCompleteProcessor.php';

        return $container->privates['Sylius\\PayPalPlugin\\Manager\\PaymentStateManagerInterface'] = new \Sylius\PayPalPlugin\Manager\PaymentStateManager(($container->services['SM\\Factory\\FactoryInterface'] ?? self::getFactoryInterfaceService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), new \Sylius\PayPalPlugin\Processor\PayPalPaymentCompleteProcessor(($container->services['payum'] ?? $container->load('getPayumService'))));
    }
}
