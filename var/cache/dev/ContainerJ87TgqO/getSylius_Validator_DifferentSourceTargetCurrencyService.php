<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_DifferentSourceTargetCurrencyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.different_source_target_currency' shared service.
     *
     * @return \Sylius\Bundle\CurrencyBundle\Validator\Constraints\DifferentSourceTargetCurrencyValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Validator/Constraints/DifferentSourceTargetCurrencyValidator.php';

        return $container->services['sylius.validator.different_source_target_currency'] = new \Sylius\Bundle\CurrencyBundle\Validator\Constraints\DifferentSourceTargetCurrencyValidator();
    }
}
