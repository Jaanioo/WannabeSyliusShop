<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_PromotionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.promotion' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\PromotionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Repository/PromotionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Doctrine/ORM/PromotionRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Repository/PromotionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/PromotionRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->services['sylius.repository.promotion'])) {
            return $container->services['sylius.repository.promotion'];
        }

        return $container->services['sylius.repository.promotion'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\PromotionRepository($a, $a->getClassMetadata('App\\Entity\\Promotion\\Promotion'));
    }
}
