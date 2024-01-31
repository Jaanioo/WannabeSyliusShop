<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_EmbedsFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'hateoas.embeds_factory' shared service.
     *
     * @return \Hateoas\Factory\EmbeddedsFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Factory/EmbeddedsFactory.php';

        return $container->privates['hateoas.embeds_factory'] = new \Hateoas\Factory\EmbeddedsFactory(($container->privates['hateoas.configuration.metadata_factory'] ?? self::getHateoas_Configuration_MetadataFactoryService($container)), ($container->privates['jms_serializer.expression_evaluator'] ?? self::getJmsSerializer_ExpressionEvaluatorService($container)), ($container->privates['hateoas.serializer.exclusion_manager'] ?? $container->load('getHateoas_Serializer_ExclusionManagerService')));
    }
}
