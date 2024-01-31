<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_FormRegistry_PromotionActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form_registry.promotion_action' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistry.php';

        $container->services['sylius.form_registry.promotion_action'] = $instance = new \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry();

        $instance->add('order_fixed_discount', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Action\\ChannelBasedFixedDiscountConfigurationType');
        $instance->add('unit_fixed_discount', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Action\\ChannelBasedUnitFixedDiscountConfigurationType');
        $instance->add('order_percentage_discount', 'default', 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\Action\\PercentageDiscountConfigurationType');
        $instance->add('unit_percentage_discount', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Action\\ChannelBasedUnitPercentageDiscountConfigurationType');
        $instance->add('shipping_percentage_discount', 'default', 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\Action\\PercentageDiscountConfigurationType');

        return $instance;
    }
}
