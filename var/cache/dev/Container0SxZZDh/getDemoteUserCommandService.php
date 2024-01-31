<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDemoteUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\UserBundle\Command\DemoteUserCommand' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Command\DemoteUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-framework-bundle/src/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/AbstractRoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/DemoteUserCommand.php';

        $container->services['Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand'] = $instance = new \Sylius\Bundle\UserBundle\Command\DemoteUserCommand();

        $instance->setName('sylius:user:demote');

        return $instance;
    }
}
