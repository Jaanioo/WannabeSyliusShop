<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_RandomGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.random_generator' shared service.
     *
     * @return \Sylius\Component\Resource\Generator\RandomnessGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

        return $container->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator();
    }
}
