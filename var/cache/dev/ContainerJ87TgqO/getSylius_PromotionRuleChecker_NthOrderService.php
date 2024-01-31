<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_NthOrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.nth_order' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\Rule\NthOrderRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/NthOrderRuleChecker.php';

        return $container->services['sylius.promotion_rule_checker.nth_order'] = new \Sylius\Component\Core\Promotion\Checker\Rule\NthOrderRuleChecker(($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)));
    }
}