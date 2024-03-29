<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ActivePromotionsProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.active_promotions_provider' shared service.
     *
     * @return \Sylius\Component\Core\Provider\ActivePromotionsByChannelProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Provider/PreQualifiedPromotionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ActivePromotionsByChannelProvider.php';

        $a = ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService'));

        if (isset($container->services['sylius.active_promotions_provider'])) {
            return $container->services['sylius.active_promotions_provider'];
        }

        return $container->services['sylius.active_promotions_provider'] = new \Sylius\Component\Core\Provider\ActivePromotionsByChannelProvider($a);
    }
}
