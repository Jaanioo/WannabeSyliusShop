<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ArrayToDefinitionConverterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.array_to_definition_converter' shared service.
     *
     * @return \Sylius\Component\Grid\Definition\ArrayToDefinitionConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Definition/ArrayToDefinitionConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Definition/ArrayToDefinitionConverter.php';

        return $container->services['sylius.grid.array_to_definition_converter'] = new \Sylius\Component\Grid\Definition\ArrayToDefinitionConverter(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
