<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShippingEligibilityCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.shipping_eligibility_checker' shared service.
     *
     * @return \Sylius\Component\Shipping\Checker\ShippingMethodEligibilityChecker
     *
     * @deprecated Since sylius/sylius 1.8: The "sylius.shipping_eligibility_checker" is deprecated since Sylius 1.8 and will be removed in 2.0. Use "sylius.shipping_method_eligibility_checker" instead
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('sylius/sylius', '1.8', 'The "sylius.shipping_eligibility_checker" is deprecated since Sylius 1.8 and will be removed in 2.0. Use "sylius.shipping_method_eligibility_checker" instead');

        return $container->services['sylius.shipping_eligibility_checker'] = new \Sylius\Component\Shipping\Checker\ShippingMethodEligibilityChecker();
    }
}
