<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantCatalogPromotionsProcessorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductVariantCatalogPromotionsProcessorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductVariantCatalogPromotionsProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/ProductVariantCatalogPromotionsProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/ProductVariantCatalogPromotionsProcessor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandDispatcher\\ApplyCatalogPromotionsOnVariantsCommandDispatcherInterface'] ?? $container->load('getApplyCatalogPromotionsOnVariantsCommandDispatcherInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductVariantCatalogPromotionsProcessorInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductVariantCatalogPromotionsProcessorInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductVariantCatalogPromotionsProcessorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductVariantCatalogPromotionsProcessor($a);
    }
}
