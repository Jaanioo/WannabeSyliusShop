<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_AttributeType_DatetimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.attribute_type.datetime' shared service.
     *
     * @return \Sylius\Component\Attribute\AttributeType\DatetimeAttributeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/AttributeTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/DatetimeAttributeType.php';

        return $container->services['sylius.attribute_type.datetime'] = new \Sylius\Component\Attribute\AttributeType\DatetimeAttributeType();
    }
}
