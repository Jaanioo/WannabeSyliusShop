<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\PromotionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Form/Type/PromotionType.php';

        return $container->services['sylius.form.type.promotion'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionType('App\\Entity\\Promotion\\Promotion', $container->parameters['sylius.form.type.promotion.validation_groups']);
    }
}
