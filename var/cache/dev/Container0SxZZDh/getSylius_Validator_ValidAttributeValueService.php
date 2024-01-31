<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ValidAttributeValueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.valid_attribute_value' shared service.
     *
     * @return \Sylius\Bundle\AttributeBundle\Validator\Constraints\ValidAttributeValueValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Validator/Constraints/ValidAttributeValueValidator.php';

        return $container->services['sylius.validator.valid_attribute_value'] = new \Sylius\Bundle\AttributeBundle\Validator\Constraints\ValidAttributeValueValidator(($container->services['sylius.registry.attribute_type'] ?? $container->load('getSylius_Registry_AttributeTypeService')));
    }
}
