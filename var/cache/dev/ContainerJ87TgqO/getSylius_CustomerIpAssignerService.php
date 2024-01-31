<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CustomerIpAssignerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.customer_ip_assigner' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Assigner\CustomerIpAssigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Assigner/IpAssignerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Assigner/CustomerIpAssigner.php';

        return $container->services['sylius.customer_ip_assigner'] = new \Sylius\Bundle\CoreBundle\Assigner\CustomerIpAssigner();
    }
}
