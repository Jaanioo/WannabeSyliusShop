<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusFixtures_LoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius_fixtures.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius_fixtures.logger'] = new \Monolog\Logger('sylius_fixtures', [($container->services['sylius_fixtures.logger.handler.console'] ?? $container->load('getSyliusFixtures_Logger_Handler_ConsoleService'))]);
    }
}
