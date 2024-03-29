<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_UniqueProvinceCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.unique_province_collection' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Validator\Constraints\UniqueProvinceCollectionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Validator/Constraints/UniqueProvinceCollectionValidator.php';

        return $container->services['sylius.validator.unique_province_collection'] = new \Sylius\Bundle\AddressingBundle\Validator\Constraints\UniqueProvinceCollectionValidator();
    }
}
