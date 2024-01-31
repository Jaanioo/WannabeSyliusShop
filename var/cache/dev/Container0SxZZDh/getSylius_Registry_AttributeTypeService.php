<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Registry_AttributeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.registry.attribute_type' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/AttributeTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/TextAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/TextareaAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/CheckboxAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/IntegerAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/PercentAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/DatetimeAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/DateAttributeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/SelectAttributeType.php';

        $container->services['sylius.registry.attribute_type'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Attribute\\AttributeType\\AttributeTypeInterface', 'attribute type');

        $instance->register('text', ($container->services['sylius.attribute_type.text'] ??= new \Sylius\Component\Attribute\AttributeType\TextAttributeType()));
        $instance->register('textarea', ($container->services['sylius.attribute_type.textarea'] ??= new \Sylius\Component\Attribute\AttributeType\TextareaAttributeType()));
        $instance->register('checkbox', ($container->services['sylius.attribute_type.checkbox'] ??= new \Sylius\Component\Attribute\AttributeType\CheckboxAttributeType()));
        $instance->register('integer', ($container->services['sylius.attribute_type.integer'] ??= new \Sylius\Component\Attribute\AttributeType\IntegerAttributeType()));
        $instance->register('percent', ($container->services['sylius.attribute_type.percent'] ??= new \Sylius\Component\Attribute\AttributeType\PercentAttributeType()));
        $instance->register('datetime', ($container->services['sylius.attribute_type.datetime'] ??= new \Sylius\Component\Attribute\AttributeType\DatetimeAttributeType()));
        $instance->register('date', ($container->services['sylius.attribute_type.date'] ??= new \Sylius\Component\Attribute\AttributeType\DateAttributeType()));
        $instance->register('select', ($container->services['sylius.attribute_type.select'] ??= new \Sylius\Component\Attribute\AttributeType\SelectAttributeType()));

        return $instance;
    }
}
