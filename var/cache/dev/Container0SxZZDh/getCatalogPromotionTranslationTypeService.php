<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionTranslationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionTranslationType' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionTranslationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Form/Type/CatalogPromotionTranslationType.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionTranslationType'] = new \Sylius\Bundle\PromotionBundle\Form\Type\CatalogPromotionTranslationType('Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslation', $container->parameters['sylius.form.type.catalog_promotion_translation.validation_groups']);
    }
}
