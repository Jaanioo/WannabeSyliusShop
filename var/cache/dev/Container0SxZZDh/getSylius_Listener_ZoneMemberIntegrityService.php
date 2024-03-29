<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_ZoneMemberIntegrityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.zone_member_integrity' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\EventListener\ZoneMemberIntegrityListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/EventListener/ZoneMemberIntegrityListener.php';

        $a = ($container->services['Sylius\\Component\\Addressing\\Checker\\ZoneDeletionCheckerInterface'] ?? $container->load('getZoneDeletionCheckerInterfaceService'));

        if (isset($container->services['sylius.listener.zone_member_integrity'])) {
            return $container->services['sylius.listener.zone_member_integrity'];
        }

        return $container->services['sylius.listener.zone_member_integrity'] = new \Sylius\Bundle\AddressingBundle\EventListener\ZoneMemberIntegrityListener(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a, ($container->services['Sylius\\Component\\Addressing\\Checker\\CountryProvincesDeletionCheckerInterface'] ?? $container->load('getCountryProvincesDeletionCheckerInterfaceService')));
    }
}
