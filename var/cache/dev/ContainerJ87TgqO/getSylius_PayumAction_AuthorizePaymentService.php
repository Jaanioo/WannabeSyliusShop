<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PayumAction_AuthorizePaymentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.payum_action.authorize_payment' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Action\AuthorizePaymentAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/GatewayAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/GatewayAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/GatewayAwareAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Action/AuthorizePaymentAction.php';

        return $container->services['sylius.payum_action.authorize_payment'] = new \Sylius\Bundle\PayumBundle\Action\AuthorizePaymentAction(($container->services['sylius.payment_description_provider'] ?? $container->load('getSylius_PaymentDescriptionProviderService')));
    }
}