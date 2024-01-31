<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_PromotionCouponGenerationAmountService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.promotion_coupon_generation_amount' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Validator\CouponGenerationAmountValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Validator/CouponGenerationAmountValidator.php';

        return $container->services['sylius.validator.promotion_coupon_generation_amount'] = new \Sylius\Bundle\PromotionBundle\Validator\CouponGenerationAmountValidator(($container->services['sylius.promotion_coupon_generator.percentage_policy'] ?? $container->load('getSylius_PromotionCouponGenerator_PercentagePolicyService')));
    }
}
