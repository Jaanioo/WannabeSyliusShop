<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CustomerOrderAddressesSaverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.customer_order_addresses_saver' shared service.
     *
     * @return \Sylius\Component\Core\Customer\CustomerOrderAddressesSaver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Customer/OrderAddressesSaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Customer/CustomerOrderAddressesSaver.php';

        return $container->services['sylius.customer_order_addresses_saver'] = new \Sylius\Component\Core\Customer\CustomerOrderAddressesSaver(($container->services['sylius.customer_unique_address_adder'] ?? $container->load('getSylius_CustomerUniqueAddressAdderService')));
    }
}
