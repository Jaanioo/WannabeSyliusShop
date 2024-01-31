<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInForProductScopeVariantCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\InForProductScopeVariantChecker' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\InForProductScopeVariantChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Checker/VariantInScopeCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Checker/InForProductScopeVariantChecker.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\InForProductScopeVariantChecker'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Checker\InForProductScopeVariantChecker();
    }
}
