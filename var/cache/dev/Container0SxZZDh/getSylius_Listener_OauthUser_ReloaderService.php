<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_OauthUser_ReloaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.oauth_user.reloader' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UserReloaderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/EventListener/UserReloaderListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Reloader/UserReloaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Reloader/UserReloader.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['sylius.listener.oauth_user.reloader'])) {
            return $container->privates['sylius.listener.oauth_user.reloader'];
        }

        return $container->privates['sylius.listener.oauth_user.reloader'] = new \Sylius\Bundle\UserBundle\EventListener\UserReloaderListener(new \Sylius\Bundle\UserBundle\Reloader\UserReloader($a));
    }
}
