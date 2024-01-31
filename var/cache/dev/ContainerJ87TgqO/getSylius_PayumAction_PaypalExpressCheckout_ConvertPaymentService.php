<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PayumAction_PaypalExpressCheckout_ConvertPaymentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.payum_action.paypal_express_checkout.convert_payment' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Action\Paypal\ExpressCheckout\ConvertPaymentAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Action/Paypal/ExpressCheckout/ConvertPaymentAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/InvoiceNumberGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/IdBasedInvoiceNumberGenerator.php';

        return $container->services['sylius.payum_action.paypal_express_checkout.convert_payment'] = new \Sylius\Bundle\PayumBundle\Action\Paypal\ExpressCheckout\ConvertPaymentAction(($container->services['sylius.invoice_number_generator'] ??= new \Sylius\Component\Core\Payment\IdBasedInvoiceNumberGenerator()));
    }
}
