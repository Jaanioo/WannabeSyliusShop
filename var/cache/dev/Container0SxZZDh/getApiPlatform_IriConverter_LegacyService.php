<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_IriConverter_LegacyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.iri_converter.legacy' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     *
     * @deprecated Since api-platform/core 2.7: Using "api_platform.iri_converter.legacy" is deprecated since API Platform 2.7. Use "ApiPlatform\Api\IriConverterInterface" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('api-platform/core', '2.7', 'Using "api_platform.iri_converter.legacy" is deprecated since API Platform 2.7. Use "ApiPlatform\\Api\\IriConverterInterface" instead.');

        $a = ($container->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService($container));

        if (isset($container->privates['api_platform.iri_converter.legacy'])) {
            return $container->privates['api_platform.iri_converter.legacy'];
        }
        $b = ($container->privates['Sylius\\Bundle\\ApiBundle\\DataProvider\\ChannelAwareItemDataProvider'] ?? self::getChannelAwareItemDataProviderService($container));

        if (isset($container->privates['api_platform.iri_converter.legacy'])) {
            return $container->privates['api_platform.iri_converter.legacy'];
        }
        $c = ($container->services['api_platform.route_name_resolver'] ?? $container->load('getApiPlatform_RouteNameResolverService'));

        if (isset($container->privates['api_platform.iri_converter.legacy'])) {
            return $container->privates['api_platform.iri_converter.legacy'];
        }
        $d = ($container->privates['debug.api_platform.subresource_data_provider'] ?? self::getDebug_ApiPlatform_SubresourceDataProviderService($container));

        if (isset($container->privates['api_platform.iri_converter.legacy'])) {
            return $container->privates['api_platform.iri_converter.legacy'];
        }
        $e = ($container->privates['api_platform.identifier.converter'] ?? self::getApiPlatform_Identifier_ConverterService($container));

        if (isset($container->privates['api_platform.iri_converter.legacy'])) {
            return $container->privates['api_platform.iri_converter.legacy'];
        }

        return $container->privates['api_platform.iri_converter.legacy'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container)), $a, $b, $c, ($container->privates['api_platform.router'] ?? self::getApiPlatform_RouterService($container)), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->privates['api_platform.identifiers_extractor.cached'] ?? self::getApiPlatform_IdentifiersExtractor_CachedService($container)), $d, $e, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataFactory_CachedService($container)));
    }
}