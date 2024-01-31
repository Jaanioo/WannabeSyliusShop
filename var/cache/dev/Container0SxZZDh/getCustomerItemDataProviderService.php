<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerItemDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\CustomerItemDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\CustomerItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/CustomerItemDataProvider.php';

        $a = ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\CustomerItemDataProvider'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\CustomerItemDataProvider'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\CustomerItemDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\CustomerItemDataProvider(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? self::getUserContextInterfaceService($container)), $a);
    }
}
