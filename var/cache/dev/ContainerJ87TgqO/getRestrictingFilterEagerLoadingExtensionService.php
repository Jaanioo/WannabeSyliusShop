<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRestrictingFilterEagerLoadingExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\RestrictingFilterEagerLoadingExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\RestrictingFilterEagerLoadingExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Doctrine/QueryCollectionExtension/RestrictingFilterEagerLoadingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/FilterEagerLoadingExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\RestrictingFilterEagerLoadingExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\RestrictingFilterEagerLoadingExtension(new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataFactory_CachedService($container)), true, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container))), $container->parameters['sylius_api.filter_eager_loading_extension.restricted_resources']);
    }
}
