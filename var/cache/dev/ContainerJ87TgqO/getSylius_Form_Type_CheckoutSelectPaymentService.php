<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CheckoutSelectPaymentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.form.type.checkout_select_payment' shared service.
     *
     * @return \Sylius\PayPalPlugin\Form\Type\SelectPaymentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Form/Type/SelectPaymentType.php';

        return $container->privates['sylius.form.type.checkout_select_payment'] = new \Sylius\PayPalPlugin\Form\Type\SelectPaymentType('App\\Entity\\Order\\Order', $container->parameters['sylius.form.type.checkout_select_payment.validation_groups']);
    }
}
