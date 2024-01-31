<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CommandBus_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.command_bus.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';

        $a = ($container->privates['messenger.senders_locator'] ?? $container->load('getMessenger_SendersLocatorService'));

        if (isset($container->privates['sylius.command_bus.middleware.send_message'])) {
            return $container->privates['sylius.command_bus.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['sylius.command_bus.middleware.send_message'])) {
            return $container->privates['sylius.command_bus.middleware.send_message'];
        }

        $container->privates['sylius.command_bus.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware($a, $b, true);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}