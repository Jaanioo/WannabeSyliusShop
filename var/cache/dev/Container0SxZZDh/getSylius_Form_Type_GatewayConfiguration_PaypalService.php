<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_GatewayConfiguration_PaypalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.gateway_configuration.paypal' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Form\Type\PaypalGatewayConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Form/Type/PaypalGatewayConfigurationType.php';

        return $container->services['sylius.form.type.gateway_configuration.paypal'] = new \Sylius\Bundle\PayumBundle\Form\Type\PaypalGatewayConfigurationType();
    }
}
