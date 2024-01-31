<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangeItemQuantityInCartHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Cart\ChangeItemQuantityInCartHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Cart\ChangeItemQuantityInCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/ChangeItemQuantityInCartHandler.php';

        $a = ($container->services['sylius.order_processing.order_processor'] ?? $container->load('getSylius_OrderProcessing_OrderProcessorService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\ChangeItemQuantityInCartHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\ChangeItemQuantityInCartHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\ChangeItemQuantityInCartHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\ChangeItemQuantityInCartHandler(($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')), ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')), $a);
    }
}