<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantForCatalogPromotionEligibilityInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\ProductVariantForCatalogPromotionEligibilityInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\ProductVariantForCatalogPromotionEligibility
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Checker/ProductVariantForCatalogPromotionEligibilityInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Checker/ProductVariantForCatalogPromotionEligibility.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\ProductVariantForCatalogPromotionEligibilityInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\ProductVariantForCatalogPromotionEligibility(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'for_products' => ['services', 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForProductScopeVariantChecker', 'getInForProductScopeVariantCheckerService', true],
            'for_taxons' => ['services', 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForTaxonsScopeVariantChecker', 'getInForTaxonsScopeVariantCheckerService', true],
            'for_variants' => ['services', 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForVariantsScopeVariantChecker', 'getInForVariantsScopeVariantCheckerService', true],
        ], [
            'for_products' => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForProductScopeVariantChecker',
            'for_taxons' => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForTaxonsScopeVariantChecker',
            'for_variants' => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForVariantsScopeVariantChecker',
        ]));
    }
}
