<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_TaxonPositionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.taxon_position' shared service.
     *
     * @return \Sylius\Bundle\TaxonomyBundle\Controller\TaxonPositionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Controller/TaxonPositionController.php';

        return $container->services['sylius.controller.taxon_position'] = new \Sylius\Bundle\TaxonomyBundle\Controller\TaxonPositionController(($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}