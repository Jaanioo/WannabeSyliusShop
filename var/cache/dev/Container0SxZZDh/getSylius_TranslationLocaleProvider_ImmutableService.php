<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_TranslationLocaleProvider_ImmutableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.translation_locale_provider.immutable' shared service.
     *
     * @return \Sylius\Component\Resource\Translation\Provider\ImmutableTranslationLocaleProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Translation/Provider/TranslationLocaleProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Translation/Provider/ImmutableTranslationLocaleProvider.php';

        return $container->services['sylius.translation_locale_provider.immutable'] = new \Sylius\Component\Resource\Translation\Provider\ImmutableTranslationLocaleProvider(['en_US'], 'en_US');
    }
}