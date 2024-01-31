<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getZoneDeletionCheckerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Addressing\Checker\ZoneDeletionCheckerInterface' shared service.
     *
     * @return \Sylius\Component\Addressing\Checker\ZoneDeletionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Checker/ZoneDeletionCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Checker/ZoneDeletionChecker.php';

        $a = ($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService'));

        if (isset($container->services['Sylius\\Component\\Addressing\\Checker\\ZoneDeletionCheckerInterface'])) {
            return $container->services['Sylius\\Component\\Addressing\\Checker\\ZoneDeletionCheckerInterface'];
        }

        return $container->services['Sylius\\Component\\Addressing\\Checker\\ZoneDeletionCheckerInterface'] = new \Sylius\Component\Addressing\Checker\ZoneDeletionChecker($a);
    }
}
