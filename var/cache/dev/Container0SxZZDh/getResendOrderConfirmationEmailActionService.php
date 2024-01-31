<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResendOrderConfirmationEmailActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\AdminBundle\Action\ResendOrderConfirmationEmailAction' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Action\ResendOrderConfirmationEmailAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Action/ResendOrderConfirmationEmailAction.php';

        return $container->services['Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction'] = new \Sylius\Bundle\AdminBundle\Action\ResendOrderConfirmationEmailAction(($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)), ($container->services['Sylius\\Bundle\\AdminBundle\\EmailManager\\OrderEmailManagerInterface'] ?? $container->load('getOrderEmailManagerInterfaceService')), ($container->services['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
