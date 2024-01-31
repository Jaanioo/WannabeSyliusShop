<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiCartBlamerListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\EventListener\ApiCartBlamerListener' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\EventListener\ApiCartBlamerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/EventListener/ApiCartBlamerListener.php';

        $a = ($container->services['sylius.context.cart'] ?? self::getSylius_Context_CartService($container));

        if (isset($container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'])) {
            return $container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'];
        }
        $b = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'])) {
            return $container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'];
        }

        return $container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'] = new \Sylius\Bundle\ApiBundle\EventListener\ApiCartBlamerListener($a, ($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? self::getSylius_SectionResolver_UriBasedSectionResolverService($container)), $b);
    }
}
