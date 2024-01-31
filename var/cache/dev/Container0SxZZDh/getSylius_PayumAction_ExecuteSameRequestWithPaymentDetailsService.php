<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PayumAction_ExecuteSameRequestWithPaymentDetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.payum_action.execute_same_request_with_payment_details' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Action\ExecuteSameRequestWithPaymentDetailsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/GatewayAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/GatewayAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/GatewayAwareAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Action/ExecuteSameRequestWithPaymentDetailsAction.php';

        return $container->services['sylius.payum_action.execute_same_request_with_payment_details'] = new \Sylius\Bundle\PayumBundle\Action\ExecuteSameRequestWithPaymentDetailsAction();
    }
}
