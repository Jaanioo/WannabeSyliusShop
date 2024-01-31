<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionCouponRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\PromotionBundle\Doctrine\ORM\PromotionCouponRepository' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Doctrine\ORM\PromotionCouponRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Repository/PromotionCouponRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Doctrine/ORM/PromotionCouponRepository.php';

        return $container->privates['Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository'] = $container->get('sylius.repository.promotion_coupon');
    }
}