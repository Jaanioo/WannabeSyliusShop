<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Generator_ProductVariantService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.generator.product_variant' shared service.
     *
     * @return \Sylius\Component\Product\Generator\ProductVariantGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/ProductVariantGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/ProductVariantGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityChecker.php';

        return $container->services['sylius.generator.product_variant'] = new \Sylius\Component\Product\Generator\ProductVariantGenerator(($container->services['Sylius\\Component\\Product\\Factory\\ProductVariantFactoryInterface'] ?? $container->load('getProductVariantFactoryInterfaceService')), ($container->services['sylius.checker.product_variants_parity'] ??= new \Sylius\Component\Product\Checker\ProductVariantsParityChecker()));
    }
}
