<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMethodsCollectionDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\ShippingMethodsCollectionDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\ShippingMethodsCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/ShippingMethodsCollectionDataProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\ShippingMethodsCollectionDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\ShippingMethodsCollectionDataProvider(($container->services['sylius.repository.shipment'] ?? self::getSylius_Repository_ShipmentService($container)), ($container->services['sylius.repository.shipping_method'] ?? self::getSylius_Repository_ShippingMethodService($container)), ($container->services['sylius.shipping_methods_resolver'] ?? self::getSylius_ShippingMethodsResolverService($container)), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? self::getChannelContextInterfaceService($container)));
    }
}
