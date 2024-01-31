<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_FixedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'liip_imagine.filter.loader.fixed' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FixedFilterLoader.php';

        return $container->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader();
    }
}
