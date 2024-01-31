<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1tn1eCDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1tn1eCD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1tn1eCD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin' => ['privates', 'debug.security.event_dispatcher.admin', 'getDebug_Security_EventDispatcher_AdminService', false],
            'security.event_dispatcher.new_api_admin_user' => ['privates', 'debug.security.event_dispatcher.new_api_admin_user', 'getDebug_Security_EventDispatcher_NewApiAdminUserService', true],
            'security.event_dispatcher.new_api_shop_user' => ['privates', 'debug.security.event_dispatcher.new_api_shop_user', 'getDebug_Security_EventDispatcher_NewApiShopUserService', true],
            'security.event_dispatcher.shop' => ['privates', 'debug.security.event_dispatcher.shop', 'getDebug_Security_EventDispatcher_ShopService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.admin' => '?',
            'security.event_dispatcher.new_api_admin_user' => '?',
            'security.event_dispatcher.new_api_shop_user' => '?',
            'security.event_dispatcher.shop' => '?',
        ]);
    }
}