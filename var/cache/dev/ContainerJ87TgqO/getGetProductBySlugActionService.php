<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductBySlugActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Controller/GetProductBySlugAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\GetProductBySlugAction'] = new \Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction(($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? self::getChannelContextInterfaceService($container)), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? self::getLocaleContextInterfaceService($container)), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->privates['api_platform.iri_converter.legacy'] ?? $container->load('getApiPlatform_IriConverter_LegacyService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
