<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ProductTaxonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.product_taxon' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.product_taxon'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductTaxon');
    }
}
