<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxonRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\TaxonomyBundle\Doctrine\ORM\TaxonRepository' shared service.
     *
     * @return \Sylius\Bundle\TaxonomyBundle\Doctrine\ORM\TaxonRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxonomy/Repository/TaxonRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Doctrine/ORM/TaxonRepository.php';

        return $container->privates['Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository'] = $container->get('sylius.repository.taxon');
    }
}
