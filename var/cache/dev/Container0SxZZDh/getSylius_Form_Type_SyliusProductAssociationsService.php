<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_SyliusProductAssociationsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.sylius_product_associations' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductAssociationsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductAssociationsType.php';

        return $container->services['sylius.form.type.sylius_product_associations'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductAssociationsType(($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')), ($container->services['sylius.form.type.data_transformer.products_to_product_associations'] ?? $container->load('getSylius_Form_Type_DataTransformer_ProductsToProductAssociationsService')));
    }
}
