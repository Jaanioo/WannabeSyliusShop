<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EventSubscriber_ResourceDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.event_subscriber.resource_delete' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\EventListener\ResourceDeleteSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/EventListener/ResourceDeleteSubscriber.php';

        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['sylius.event_subscriber.resource_delete'])) {
            return $container->services['sylius.event_subscriber.resource_delete'];
        }

        return $container->services['sylius.event_subscriber.resource_delete'] = new \Sylius\Bundle\AdminBundle\EventListener\ResourceDeleteSubscriber($a, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
