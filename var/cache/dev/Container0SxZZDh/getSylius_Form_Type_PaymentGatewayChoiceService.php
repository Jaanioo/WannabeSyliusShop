<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PaymentGatewayChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.payment_gateway_choice' shared service.
     *
     * @return \Sylius\Bundle\PaymentBundle\Form\Type\PaymentGatewayChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentGatewayChoiceType.php';

        return $container->services['sylius.form.type.payment_gateway_choice'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentGatewayChoiceType($container->parameters['sylius.payment_gateways']);
    }
}