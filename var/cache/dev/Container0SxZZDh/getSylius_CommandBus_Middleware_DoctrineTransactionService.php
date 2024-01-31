<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CommandBus_Middleware_DoctrineTransactionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.command_bus.middleware.doctrine_transaction' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineTransactionMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Messenger/AbstractDoctrineMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php';

        return $container->privates['sylius.command_bus.middleware.doctrine_transaction'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineTransactionMiddleware(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
