<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_TaxCalculator_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.tax_calculator.default' shared service.
     *
     * @return \Sylius\Component\Taxation\Calculator\DefaultCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/CalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/DefaultCalculator.php';

        return $container->services['sylius.tax_calculator.default'] = new \Sylius\Component\Taxation\Calculator\DefaultCalculator();
    }
}