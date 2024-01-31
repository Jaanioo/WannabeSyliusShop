<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_CatalogPromotionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.catalog_promotion' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.catalog_promotion'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\CatalogPromotion');
    }
}
