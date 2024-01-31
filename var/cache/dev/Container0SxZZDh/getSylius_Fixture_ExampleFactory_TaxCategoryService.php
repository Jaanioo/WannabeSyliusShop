<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_TaxCategoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.tax_category' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\TaxCategoryExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/TaxCategoryExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.tax_category'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\TaxCategoryExampleFactory(($container->services['sylius.factory.tax_category'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Taxation\\TaxCategory')));
    }
}
