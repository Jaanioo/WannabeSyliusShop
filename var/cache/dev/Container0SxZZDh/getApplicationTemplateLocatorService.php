<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationTemplateLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ThemeBundle\Twig\Locator\ApplicationTemplateLocator' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Twig\Locator\ApplicationTemplateLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Twig/Locator/ApplicationTemplateLocator.php';

        return $container->privates['Sylius\\Bundle\\ThemeBundle\\Twig\\Locator\\ApplicationTemplateLocator'] = new \Sylius\Bundle\ThemeBundle\Twig\Locator\ApplicationTemplateLocator(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
