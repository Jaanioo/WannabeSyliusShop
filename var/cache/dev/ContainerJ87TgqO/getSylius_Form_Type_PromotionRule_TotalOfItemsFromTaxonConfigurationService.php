<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionRule_TotalOfItemsFromTaxonConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion_rule.total_of_items_from_taxon_configuration' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Rule\TotalOfItemsFromTaxonConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Promotion/Rule/TotalOfItemsFromTaxonConfigurationType.php';

        return $container->services['sylius.form.type.promotion_rule.total_of_items_from_taxon_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Rule\TotalOfItemsFromTaxonConfigurationType(($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')));
    }
}
