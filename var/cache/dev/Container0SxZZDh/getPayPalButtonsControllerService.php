<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayPalButtonsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\PayPalButtonsController' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\PayPalButtonsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/PayPalButtonsController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/LocaleProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/LocaleProcessor.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\PayPalButtonsController'] = new \Sylius\PayPalPlugin\Controller\PayPalButtonsController(($container->services['twig'] ?? self::getTwigService($container)), ($container->services['router'] ?? self::getRouterService($container)), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? self::getChannelContextInterfaceService($container)), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? self::getLocaleContextInterfaceService($container)), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PayPalConfigurationProviderInterface'] ?? $container->load('getPayPalConfigurationProviderInterfaceService')), ($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)), ($container->privates['Sylius\\PayPalPlugin\\Provider\\AvailableCountriesProviderInterface'] ?? $container->load('getAvailableCountriesProviderInterfaceService')), new \Sylius\PayPalPlugin\Processor\LocaleProcessor());
    }
}
