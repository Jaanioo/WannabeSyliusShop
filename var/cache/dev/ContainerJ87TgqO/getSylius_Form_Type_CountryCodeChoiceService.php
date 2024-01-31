<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CountryCodeChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.country_code_choice' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Form\Type\CountryCodeChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/CountryCodeChoiceType.php';

        return $container->services['sylius.form.type.country_code_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryCodeChoiceType(($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
    }
}