<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? self::getCache_AppService($container)), 'cache.system' => ($container->services['cache.system'] ?? self::getCache_SystemService($container)), 'cache.validator' => ($container->privates['cache.validator'] ?? self::getCache_ValidatorService($container)), 'cache.serializer' => ($container->privates['cache.serializer'] ?? self::getCache_SerializerService($container)), 'cache.annotations' => ($container->privates['cache.annotations'] ?? self::getCache_AnnotationsService($container)), 'cache.property_info' => ($container->privates['cache.property_info'] ?? self::getCache_PropertyInfoService($container)), 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? self::getCache_Messenger_RestartWorkersSignalService($container)), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? self::getCache_ValidatorExpressionLanguageService($container)), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? self::getCache_SecurityExpressionLanguageService($container)), 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? self::getCache_SecurityIsGrantedAttributeExpressionLanguageService($container)), 'cache.security_token_verifier' => ($container->privates['cache.security_token_verifier'] ?? self::getCache_SecurityTokenVerifierService($container)), 'cache.doctrine.orm.default.result' => ($container->privates['cache.doctrine.orm.default.result'] ?? self::getCache_Doctrine_Orm_Default_ResultService($container)), 'cache.doctrine.orm.default.query' => ($container->privates['cache.doctrine.orm.default.query'] ?? self::getCache_Doctrine_Orm_Default_QueryService($container)), 'api_platform.cache.route_name_resolver' => ($container->privates['api_platform.cache.route_name_resolver'] ?? self::getApiPlatform_Cache_RouteNameResolverService($container)), 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? self::getApiPlatform_Cache_Metadata_ResourceService($container)), 'api_platform.cache.metadata.resource.legacy' => ($container->privates['api_platform.cache.metadata.resource.legacy'] ?? self::getApiPlatform_Cache_Metadata_Resource_LegacyService($container)), 'api_platform.cache.metadata.property.legacy' => ($container->privates['api_platform.cache.metadata.property.legacy'] ?? self::getApiPlatform_Cache_Metadata_Property_LegacyService($container)), 'api_platform.cache.subresource_operation_factory' => ($container->privates['api_platform.cache.subresource_operation_factory'] ?? self::getApiPlatform_Cache_SubresourceOperationFactoryService($container)), 'api_platform.cache.identifiers_extractor' => ($container->privates['api_platform.cache.identifiers_extractor'] ?? self::getApiPlatform_Cache_IdentifiersExtractorService($container)), 'cache.webpack_encore' => ($container->privates['cache.webpack_encore'] ?? self::getCache_WebpackEncoreService($container))]);
    }
}
