<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShippingMethodResolver_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.shipping_method_resolver.default' shared service.
     *
     * @return \Sylius\Component\Core\Resolver\EligibleDefaultShippingMethodResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Resolver/DefaultShippingMethodResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Resolver/EligibleDefaultShippingMethodResolver.php';

        $a = ($container->services['sylius.repository.shipping_method'] ?? self::getSylius_Repository_ShippingMethodService($container));

        if (isset($container->services['sylius.shipping_method_resolver.default'])) {
            return $container->services['sylius.shipping_method_resolver.default'];
        }
        $b = ($container->services['sylius.zone_matcher'] ?? self::getSylius_ZoneMatcherService($container));

        if (isset($container->services['sylius.shipping_method_resolver.default'])) {
            return $container->services['sylius.shipping_method_resolver.default'];
        }

        return $container->services['sylius.shipping_method_resolver.default'] = new \Sylius\Component\Core\Resolver\EligibleDefaultShippingMethodResolver($a, ($container->services['sylius.shipping_method_eligibility_checker'] ?? self::getSylius_ShippingMethodEligibilityCheckerService($container)), $b);
    }
}
