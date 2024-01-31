<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion.units_promotion_adjustments_applicator' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Applicator\UnitsPromotionAdjustmentsApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Applicator/UnitsPromotionAdjustmentsApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Applicator/UnitsPromotionAdjustmentsApplicator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributor.php';

        return $container->services['sylius.promotion.units_promotion_adjustments_applicator'] = new \Sylius\Component\Core\Promotion\Applicator\UnitsPromotionAdjustmentsApplicator(($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')), ($container->services['sylius.integer_distributor'] ??= new \Sylius\Component\Core\Distributor\IntegerDistributor()));
    }
}
