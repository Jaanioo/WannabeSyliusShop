<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_RoutableMessageBusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/RoutableMessageBus.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['messenger.routable_message_bus'])) {
            return $container->privates['messenger.routable_message_bus'];
        }

        return $container->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'sylius.command_bus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'sylius.event_bus' => ['privates', 'debug.traced.sylius.event_bus', 'getDebug_Traced_Sylius_EventBusService', false],
            'sylius_default.bus' => ['privates', 'debug.traced.sylius_default.bus', 'getDebug_Traced_SyliusDefault_BusService', false],
            'sylius_event.bus' => ['privates', 'debug.traced.sylius_event.bus', 'getDebug_Traced_SyliusEvent_BusService', false],
        ], [
            'sylius.command_bus' => '?',
            'sylius.event_bus' => '?',
            'sylius_default.bus' => '?',
            'sylius_event.bus' => '?',
        ]), $a);
    }
}
