<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderCompletedHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\EventHandler\OrderCompletedHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\EventHandler\OrderCompletedHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/EventHandler/OrderCompletedHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\EventHandler\\OrderCompletedHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\EventHandler\\OrderCompletedHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\EventHandler\\OrderCompletedHandler'] = new \Sylius\Bundle\ApiBundle\EventHandler\OrderCompletedHandler($a, ($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)));
    }
}
