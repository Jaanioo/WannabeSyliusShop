<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeChoiceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ThemeBundle\Form\Type\ThemeChoiceType' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Form\Type\ThemeChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Form/Type/ThemeChoiceType.php';

        return $container->privates['Sylius\\Bundle\\ThemeBundle\\Form\\Type\\ThemeChoiceType'] = new \Sylius\Bundle\ThemeBundle\Form\Type\ThemeChoiceType(($container->privates['Sylius\\Bundle\\ThemeBundle\\Repository\\ThemeRepositoryInterface'] ?? self::getThemeRepositoryInterfaceService($container)));
    }
}
