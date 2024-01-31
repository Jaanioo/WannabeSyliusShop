<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelsCollectionDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\ChannelsCollectionDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\ChannelsCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/ChannelsCollectionDataProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\ChannelsCollectionDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\ChannelsCollectionDataProvider(($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? self::getChannelContextInterfaceService($container)));
    }
}
