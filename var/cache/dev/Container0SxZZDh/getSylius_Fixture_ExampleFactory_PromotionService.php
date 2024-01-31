<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_PromotionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.promotion' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\PromotionExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/PromotionExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.promotion'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\PromotionExampleFactory(($container->services['sylius.factory.promotion'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\Promotion')), ($container->services['sylius.fixture.example_factory.promotion_rule'] ?? $container->load('getSylius_Fixture_ExampleFactory_PromotionRuleService')), ($container->services['sylius.fixture.example_factory.promotion_action'] ?? $container->load('getSylius_Fixture_ExampleFactory_PromotionActionService')), ($container->services['sylius.repository.channel'] ?? self::getSylius_Repository_ChannelService($container)), ($container->services['Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface'] ?? $container->load('getPromotionCouponFactoryInterfaceService')));
    }
}
