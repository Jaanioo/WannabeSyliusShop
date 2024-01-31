<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailManager_OrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_manager.order' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EmailManager\OrderEmailManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EmailManager/OrderEmailManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EmailManager/OrderEmailManager.php';

        $a = ($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService'));

        if (isset($container->services['sylius.email_manager.order'])) {
            return $container->services['sylius.email_manager.order'];
        }
        $b = ($container->services['sylius.mailer.order_email_manager'] ?? $container->load('getSylius_Mailer_OrderEmailManagerService'));

        if (isset($container->services['sylius.email_manager.order'])) {
            return $container->services['sylius.email_manager.order'];
        }

        return $container->services['sylius.email_manager.order'] = new \Sylius\Bundle\ShopBundle\EmailManager\OrderEmailManager($a, $b);
    }
}
