<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionAction_FixedDiscountService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_action.fixed_discount' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Action\FixedDiscountPromotionActionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionActionCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Action/DiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Action/FixedDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributor.php';

        $a = ($container->services['sylius.currency_converter'] ?? self::getSylius_CurrencyConverterService($container));

        if (isset($container->services['sylius.promotion_action.fixed_discount'])) {
            return $container->services['sylius.promotion_action.fixed_discount'];
        }

        return $container->services['sylius.promotion_action.fixed_discount'] = new \Sylius\Component\Core\Promotion\Action\FixedDiscountPromotionActionCommand(($container->services['sylius.proportional_integer_distributor'] ??= new \Sylius\Component\Core\Distributor\ProportionalIntegerDistributor()), ($container->services['sylius.promotion.units_promotion_adjustments_applicator'] ?? $container->load('getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService')), ($container->services['Sylius\\Component\\Core\\Distributor\\MinimumPriceDistributorInterface'] ?? $container->load('getMinimumPriceDistributorInterfaceService')), $a);
    }
}
