<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_OrderAdjustmentsClearerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.order_adjustments_clearer' shared service.
     *
     * @return \Sylius\Component\Core\OrderProcessing\OrderAdjustmentsClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/OrderProcessing/OrderAdjustmentsClearer.php';

        return $container->services['sylius.order_processing.order_adjustments_clearer'] = new \Sylius\Component\Core\OrderProcessing\OrderAdjustmentsClearer(['order_item_promotion', 'order_promotion', 'order_shipping_promotion', 'order_unit_promotion', 'shipping', 'tax']);
    }
}