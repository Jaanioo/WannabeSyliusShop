<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminUserDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataPersister\AdminUserDataPersister' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataPersister\AdminUserDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataPersister/AdminUserDataPersister.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataPersister\\AdminUserDataPersister'] = new \Sylius\Bundle\ApiBundle\DataPersister\AdminUserDataPersister(($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService')), ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->services['sylius.security.password_updater'] ?? $container->load('getSylius_Security_PasswordUpdaterService')));
    }
}
