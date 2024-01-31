<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_PelzvzpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.Pelzvzp' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler'] ?? $container->load('getChooseShippingMethodHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.Pelzvzp'])) {
            return $container->privates['.messenger.handler_descriptor.Pelzvzp'];
        }

        return $container->privates['.messenger.handler_descriptor.Pelzvzp'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius_default.bus']);
    }
}