<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_ShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.shop_user' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\ShopUserExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ShopUserExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.shop_user'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ShopUserExampleFactory(($container->services['sylius.factory.shop_user'] ?? $container->load('getSylius_Factory_ShopUserService')), ($container->services['sylius.factory.customer'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\Customer')), ($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
    }
}
