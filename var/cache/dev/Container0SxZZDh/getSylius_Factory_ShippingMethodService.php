<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ShippingMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.shipping_method' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\TranslatableFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/TranslatableFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/TranslatableFactory.php';

        return $container->services['sylius.factory.shipping_method'] = new \Sylius\Component\Resource\Factory\TranslatableFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Shipping\\ShippingMethod'), ($container->services['sylius.translation_locale_provider.admin'] ?? $container->load('getSylius_TranslationLocaleProvider_AdminService')));
    }
}
