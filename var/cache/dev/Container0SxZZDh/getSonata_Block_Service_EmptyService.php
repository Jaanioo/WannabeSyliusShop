<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_EmptyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.service.empty' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EmptyBlockService.php';

        $a = ($container->services['twig'] ?? self::getTwigService($container));

        if (isset($container->services['sonata.block.service.empty'])) {
            return $container->services['sonata.block.service.empty'];
        }

        return $container->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService($a);
    }
}