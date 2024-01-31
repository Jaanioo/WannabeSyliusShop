<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Taxation_OrderShipmentTaxesApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.taxation.order_shipment_taxes_applicator' shared service.
     *
     * @return \Sylius\Component\Core\Taxation\Applicator\OrderShipmentTaxesApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Taxation/Applicator/OrderTaxesApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Taxation/Applicator/OrderShipmentTaxesApplicator.php';

        return $container->services['sylius.taxation.order_shipment_taxes_applicator'] = new \Sylius\Component\Core\Taxation\Applicator\OrderShipmentTaxesApplicator(($container->services['sylius.tax_calculator'] ?? $container->load('getSylius_TaxCalculatorService')), ($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')), ($container->services['sylius.tax_rate_resolver'] ?? $container->load('getSylius_TaxRateResolverService')));
    }
}
