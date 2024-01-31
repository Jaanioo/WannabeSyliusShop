<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionEndedListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Listener/CatalogPromotionEndedListener.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\AllProductVariantsCatalogPromotionsProcessorInterface'] ?? $container->load('getAllProductVariantsCatalogPromotionsProcessorInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }
        $c = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener($a, ($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), $b, $c);
    }
}
