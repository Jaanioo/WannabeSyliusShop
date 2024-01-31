<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Generator_TaxonSlugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.generator.taxon_slug' shared service.
     *
     * @return \Sylius\Component\Taxonomy\Generator\TaxonSlugGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGenerator.php';

        return $container->services['sylius.generator.taxon_slug'] = new \Sylius\Component\Taxonomy\Generator\TaxonSlugGenerator();
    }
}