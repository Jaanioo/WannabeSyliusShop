<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionAnnouncerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Announcer\CatalogPromotionAnnouncerInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Announcer\CatalogPromotionAnnouncer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Announcer/CatalogPromotionAnnouncerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Announcer/CatalogPromotionAnnouncer.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Calculator/DelayStampCalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Calculator/DelayStampCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/calendar/src/Provider/DateTimeProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/calendar/src/Provider/Calendar.php';

        $a = ($container->privates['debug.traced.sylius.event_bus'] ?? self::getDebug_Traced_Sylius_EventBusService($container));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Announcer\\CatalogPromotionAnnouncerInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Announcer\\CatalogPromotionAnnouncerInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Announcer\\CatalogPromotionAnnouncerInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Announcer\CatalogPromotionAnnouncer($a, ($container->services['Sylius\\Bundle\\CoreBundle\\Calculator\\DelayStampCalculatorInterface'] ??= new \Sylius\Bundle\CoreBundle\Calculator\DelayStampCalculator()), ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ??= new \Sylius\Calendar\Provider\Calendar()));
    }
}
