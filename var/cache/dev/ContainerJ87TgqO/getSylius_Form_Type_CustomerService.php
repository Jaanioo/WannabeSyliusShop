<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CustomerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.customer' shared service.
     *
     * @return \Sylius\Bundle\CustomerBundle\Form\Type\CustomerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Form/Type/CustomerType.php';

        return $container->services['sylius.form.type.customer'] = new \Sylius\Bundle\CustomerBundle\Form\Type\CustomerType('App\\Entity\\Customer\\Customer', $container->parameters['sylius.form.type.customer.validation_groups']);
    }
}
