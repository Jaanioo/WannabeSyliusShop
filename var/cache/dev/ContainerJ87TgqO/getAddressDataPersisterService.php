<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddressDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataPersister\AddressDataPersister' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataPersister\AddressDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataPersister/AddressDataPersister.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataPersister\\AddressDataPersister'] = new \Sylius\Bundle\ApiBundle\DataPersister\AddressDataPersister(($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService')), ($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? self::getUserContextInterfaceService($container)));
    }
}