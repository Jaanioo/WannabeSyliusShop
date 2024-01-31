<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_ShopUserDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.shop_user_delete' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UserDeleteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/EventListener/UserDeleteListener.php';

        return $container->privates['sylius.listener.shop_user_delete'] = new \Sylius\Bundle\UserBundle\EventListener\UserDeleteListener(($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
