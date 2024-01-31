<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_ShippingCountryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.shipping_country' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\Rule\ShippingCountryRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/ShippingCountryRuleChecker.php';

        return $container->services['sylius.promotion_rule_checker.shipping_country'] = new \Sylius\Component\Core\Promotion\Checker\Rule\ShippingCountryRuleChecker(($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
    }
}
