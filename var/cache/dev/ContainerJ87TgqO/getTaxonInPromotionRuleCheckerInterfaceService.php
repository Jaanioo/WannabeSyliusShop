<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxonInPromotionRuleCheckerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Core\Promotion\Checker\TaxonInPromotionRuleCheckerInterface' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\TaxonInPromotionRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/TaxonInPromotionRuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/TaxonInPromotionRuleChecker.php';

        return $container->services['Sylius\\Component\\Core\\Promotion\\Checker\\TaxonInPromotionRuleCheckerInterface'] = new \Sylius\Component\Core\Promotion\Checker\TaxonInPromotionRuleChecker(($container->services['sylius.repository.promotion_rule'] ?? $container->load('getSylius_Repository_PromotionRuleService')));
    }
}
