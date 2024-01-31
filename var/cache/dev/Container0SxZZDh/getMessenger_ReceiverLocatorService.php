<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'catalog_promotion_removal' => ['privates', 'messenger.transport.catalog_promotion_removal', 'getMessenger_Transport_CatalogPromotionRemovalService', true],
            'catalog_promotion_removal_failed' => ['privates', 'messenger.transport.catalog_promotion_removal_failed', 'getMessenger_Transport_CatalogPromotionRemovalFailedService', true],
            'main' => ['privates', 'messenger.transport.main', 'getMessenger_Transport_MainService', true],
            'main_failed' => ['privates', 'messenger.transport.main_failed', 'getMessenger_Transport_MainFailedService', true],
            'messenger.transport.catalog_promotion_removal' => ['privates', 'messenger.transport.catalog_promotion_removal', 'getMessenger_Transport_CatalogPromotionRemovalService', true],
            'messenger.transport.catalog_promotion_removal_failed' => ['privates', 'messenger.transport.catalog_promotion_removal_failed', 'getMessenger_Transport_CatalogPromotionRemovalFailedService', true],
            'messenger.transport.main' => ['privates', 'messenger.transport.main', 'getMessenger_Transport_MainService', true],
            'messenger.transport.main_failed' => ['privates', 'messenger.transport.main_failed', 'getMessenger_Transport_MainFailedService', true],
        ], [
            'catalog_promotion_removal' => '?',
            'catalog_promotion_removal_failed' => '?',
            'main' => '?',
            'main_failed' => '?',
            'messenger.transport.catalog_promotion_removal' => '?',
            'messenger.transport.catalog_promotion_removal_failed' => '?',
            'messenger.transport.main' => '?',
            'messenger.transport.main_failed' => '?',
        ]);
    }
}
