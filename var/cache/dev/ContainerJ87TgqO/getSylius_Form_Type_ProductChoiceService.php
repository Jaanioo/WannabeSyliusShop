<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_choice' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductChoiceType.php';

        return $container->services['sylius.form.type.product_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductChoiceType(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
    }
}
