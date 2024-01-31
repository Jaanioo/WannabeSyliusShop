<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ProductAssociationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.product_association' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductAssociationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Repository/ProductAssociationRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductAssociationRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->services['sylius.repository.product_association'])) {
            return $container->services['sylius.repository.product_association'];
        }

        return $container->services['sylius.repository.product_association'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductAssociationRepository($a, $a->getClassMetadata('App\\Entity\\Product\\ProductAssociation'));
    }
}
