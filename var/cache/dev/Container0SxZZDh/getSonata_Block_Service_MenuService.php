<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_MenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.service.menu' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EditableBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractMenuBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/MenuBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistry.php';

        $a = ($container->services['twig'] ?? self::getTwigService($container));

        if (isset($container->services['sonata.block.service.menu'])) {
            return $container->services['sonata.block.service.menu'];
        }
        $b = ($container->privates['knp_menu.menu_provider.chain'] ?? self::getKnpMenu_MenuProvider_ChainService($container));

        if (isset($container->services['sonata.block.service.menu'])) {
            return $container->services['sonata.block.service.menu'];
        }

        return $container->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService($a, $b, ($container->services['sonata.block.menu.registry'] ??= new \Sonata\BlockBundle\Menu\MenuRegistry()));
    }
}
