<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Provider_ChannelBasedDefaultZoneProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.provider.channel_based_default_zone_provider' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Provider\ChannelBasedDefaultTaxZoneProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ZoneProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Provider/ChannelBasedDefaultTaxZoneProvider.php';

        return $container->services['sylius.provider.channel_based_default_zone_provider'] = new \Sylius\Bundle\CoreBundle\Provider\ChannelBasedDefaultTaxZoneProvider();
    }
}
