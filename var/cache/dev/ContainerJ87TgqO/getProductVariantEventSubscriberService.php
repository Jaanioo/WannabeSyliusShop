<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\EventSubscriber\ProductVariantEventSubscriber' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\EventSubscriber\ProductVariantEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/EventSubscriber/ProductVariantEventSubscriber.php';

        $a = ($container->privates['debug.traced.sylius.event_bus'] ?? self::getDebug_Traced_Sylius_EventBusService($container));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\EventSubscriber\\ProductVariantEventSubscriber'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\EventSubscriber\\ProductVariantEventSubscriber'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\EventSubscriber\\ProductVariantEventSubscriber'] = new \Sylius\Bundle\ApiBundle\EventSubscriber\ProductVariantEventSubscriber($a);
    }
}
