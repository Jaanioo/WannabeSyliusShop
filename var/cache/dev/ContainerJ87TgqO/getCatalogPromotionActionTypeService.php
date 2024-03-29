<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionActionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionActionType' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Form/Type/CatalogPromotionActionType.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionActionType'] = new \Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionActionType('App\\Entity\\Promotion\\CatalogPromotionAction', $container->parameters['sylius.form.type.catalog_promotion.validation_groups'], new RewindableGenerator(function () use ($container) {
            yield 'percentage_discount' => ($container->services['Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionAction\\PercentageDiscountActionConfigurationType'] ??= new \Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionAction\PercentageDiscountActionConfigurationType());
            yield 'fixed_discount' => ($container->services['Sylius\\Bundle\\CoreBundle\\Form\\Type\\CatalogPromotionAction\\ChannelBasedFixedDiscountActionConfigurationType'] ??= new \Sylius\Bundle\CoreBundle\Form\Type\CatalogPromotionAction\ChannelBasedFixedDiscountActionConfigurationType());
        }, 2));
    }
}
