<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_TshirtProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.tshirt_product' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\TshirtProductFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/TshirtProductFixture.php';

        return $container->services['sylius.fixture.tshirt_product'] = new \Sylius\Bundle\CoreBundle\Fixture\TshirtProductFixture(($container->services['sylius.fixture.taxon'] ?? $container->load('getSylius_Fixture_TaxonService')), ($container->services['sylius.fixture.product_attribute'] ?? $container->load('getSylius_Fixture_ProductAttributeService')), ($container->services['sylius.fixture.product_option'] ?? $container->load('getSylius_Fixture_ProductOptionService')), ($container->services['sylius.fixture.product'] ?? $container->load('getSylius_Fixture_ProductService')));
    }
}
