<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnabledProductVariantItemExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\EnabledProductVariantItemExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\EnabledProductVariantItemExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Doctrine/QueryItemExtension/EnabledProductVariantItemExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\EnabledProductVariantItemExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\EnabledProductVariantItemExtension(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? self::getUserContextInterfaceService($container)));
    }
}
