<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_SendersLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.nWEppfd'] ?? $container->load('get_ServiceLocator_NWEppfdService'));

        if (isset($container->privates['messenger.senders_locator'])) {
            return $container->privates['messenger.senders_locator'];
        }

        return $container->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\UpdateCatalogPromotionState' => ['main'], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\ApplyCatalogPromotionsOnVariants' => ['main'], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\RemoveInactiveCatalogPromotion' => ['catalog_promotion_removal'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionCreated' => ['main'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionEnded' => ['main'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionUpdated' => ['main']], $a);
    }
}
