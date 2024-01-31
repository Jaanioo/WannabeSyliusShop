<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_Serializer_ExclusionManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'hateoas.serializer.exclusion_manager' shared service.
     *
     * @return \Hateoas\Serializer\ExclusionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/ExclusionManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Exclusion/ExpressionLanguageExclusionStrategy.php';

        return $container->privates['hateoas.serializer.exclusion_manager'] = new \Hateoas\Serializer\ExclusionManager(new \JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy(($container->privates['jms_serializer.expression_evaluator'] ?? self::getJmsSerializer_ExpressionEvaluatorService($container))));
    }
}
