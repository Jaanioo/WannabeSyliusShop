<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionScopeValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Validator\CatalogPromotionScopeValidator' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Validator\CatalogPromotionScopeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Validator/CatalogPromotionScopeValidator.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Validator\\CatalogPromotionScopeValidator'] = new \Sylius\Bundle\PromotionBundle\Validator\CatalogPromotionScopeValidator($container->parameters['sylius.catalog_promotion.scopes_types'], new RewindableGenerator(function () use ($container) {
            yield 'for_products' => ($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\ForProductsScopeValidator'] ?? $container->load('getForProductsScopeValidatorService'));
            yield 'for_taxons' => ($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\ForTaxonsScopeValidator'] ?? $container->load('getForTaxonsScopeValidatorService'));
            yield 'for_variants' => ($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\ForVariantsScopeValidator'] ?? $container->load('getForVariantsScopeValidatorService'));
        }, 3));
    }
}
