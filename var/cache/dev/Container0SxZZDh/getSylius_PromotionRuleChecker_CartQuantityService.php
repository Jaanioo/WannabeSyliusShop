<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_CartQuantityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.cart_quantity' shared service.
     *
     * @return \Sylius\Component\Promotion\Checker\Rule\CartQuantityRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/CartQuantityRuleChecker.php';

        return $container->services['sylius.promotion_rule_checker.cart_quantity'] = new \Sylius\Component\Promotion\Checker\Rule\CartQuantityRuleChecker();
    }
}
