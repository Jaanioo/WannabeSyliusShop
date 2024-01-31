<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_PromotionFilterCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.promotion_filter_collection' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\PromotionFilterCollectionTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Extension/PromotionFilterCollectionTypeExtension.php';

        return $container->services['sylius.form.extension.type.promotion_filter_collection'] = new \Sylius\Bundle\CoreBundle\Form\Extension\PromotionFilterCollectionTypeExtension();
    }
}
