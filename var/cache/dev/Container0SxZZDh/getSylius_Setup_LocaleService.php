<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Setup_LocaleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.setup.locale' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Installer\Setup\LocaleSetup
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/LocaleSetupInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/LocaleSetup.php';

        return $container->services['sylius.setup.locale'] = new \Sylius\Bundle\CoreBundle\Installer\Setup\LocaleSetup(($container->services['sylius.repository.locale'] ?? self::getSylius_Repository_LocaleService($container)), ($container->services['sylius.factory.locale'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Locale\\Locale')), 'en_US');
    }
}
