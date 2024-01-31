<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Shop_SecurityWidgetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.shop.security_widget' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\Controller\SecurityWidgetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Controller/SecurityWidgetController.php';

        return $container->services['sylius.controller.shop.security_widget'] = new \Sylius\Bundle\ShopBundle\Controller\SecurityWidgetController(($container->services['twig'] ?? self::getTwigService($container)));
    }
}
