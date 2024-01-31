<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ProductVariantCombinationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.product_variant_combination' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Validator\ProductVariantCombinationValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Validator/ProductVariantCombinationValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityChecker.php';

        return $container->services['sylius.validator.product_variant_combination'] = new \Sylius\Bundle\ProductBundle\Validator\ProductVariantCombinationValidator(($container->services['sylius.checker.product_variants_parity'] ??= new \Sylius\Component\Product\Checker\ProductVariantsParityChecker()));
    }
}
