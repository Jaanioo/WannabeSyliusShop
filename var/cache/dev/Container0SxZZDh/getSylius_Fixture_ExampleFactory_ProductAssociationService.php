<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_ProductAssociationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.product_association' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\ProductAssociationExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ProductAssociationExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.product_association'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ProductAssociationExampleFactory(($container->services['sylius.factory.product_association'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductAssociation')), ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
    }
}
