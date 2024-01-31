<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ShippingMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.shipping_method' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\ShippingMethodFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/ShippingMethodFixture.php';

        return $container->services['sylius.fixture.shipping_method'] = new \Sylius\Bundle\CoreBundle\Fixture\ShippingMethodFixture(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['sylius.fixture.example_factory.shipping_method'] ?? $container->load('getSylius_Fixture_ExampleFactory_ShippingMethodService')));
    }
}
