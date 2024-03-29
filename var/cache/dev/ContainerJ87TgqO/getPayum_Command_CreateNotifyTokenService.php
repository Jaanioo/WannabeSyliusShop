<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_CreateNotifyTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'payum.command.create_notify_token' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\CreateNotifyTokenCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/CreateNotifyTokenCommand.php';

        $container->privates['payum.command.create_notify_token'] = $instance = new \Payum\Bundle\PayumBundle\Command\CreateNotifyTokenCommand(($container->services['payum'] ?? $container->load('getPayumService')));

        $instance->setName('payum:security:create-notify-token');

        return $instance;
    }
}
