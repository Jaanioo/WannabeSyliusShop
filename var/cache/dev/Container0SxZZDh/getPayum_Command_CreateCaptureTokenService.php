<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_CreateCaptureTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'payum.command.create_capture_token' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\CreateCaptureTokenCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/CreateCaptureTokenCommand.php';

        $container->privates['payum.command.create_capture_token'] = $instance = new \Payum\Bundle\PayumBundle\Command\CreateCaptureTokenCommand(($container->services['payum'] ?? $container->load('getPayumService')));

        $instance->setName('payum:security:create-capture-token');

        return $instance;
    }
}
