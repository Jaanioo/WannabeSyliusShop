<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionCouponGenerator_PercentagePolicyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_coupon_generator.percentage_policy' shared service.
     *
     * @return \Sylius\Component\Promotion\Generator\PercentageGenerationPolicy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Generator/GenerationPolicyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Generator/PercentageGenerationPolicy.php';

        return $container->services['sylius.promotion_coupon_generator.percentage_policy'] = new \Sylius\Component\Promotion\Generator\PercentageGenerationPolicy(($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
    }
}
