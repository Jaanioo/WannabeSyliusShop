<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Admin_MenuBuilder_Promotion_UpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.admin.menu_builder.promotion.update' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Menu\PromotionUpdateMenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Menu/PromotionUpdateMenuBuilder.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['sylius.admin.menu_builder.promotion.update'])) {
            return $container->services['sylius.admin.menu_builder.promotion.update'];
        }

        return $container->services['sylius.admin.menu_builder.promotion.update'] = new \Sylius\Bundle\AdminBundle\Menu\PromotionUpdateMenuBuilder(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), $a);
    }
}
