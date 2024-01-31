<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxonFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Filter\Doctrine\TaxonFilter' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Filter\Doctrine\TaxonFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Filter/Doctrine/TaxonFilter.php';

        $a = ($container->privates['api_platform.iri_converter.legacy'] ?? $container->load('getApiPlatform_IriConverter_LegacyService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Filter\\Doctrine\\TaxonFilter'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Filter\\Doctrine\\TaxonFilter'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\Filter\\Doctrine\\TaxonFilter'] = new \Sylius\Bundle\ApiBundle\Filter\Doctrine\TaxonFilter(($container->services['doctrine'] ?? self::getDoctrineService($container)), $a);
    }
}
