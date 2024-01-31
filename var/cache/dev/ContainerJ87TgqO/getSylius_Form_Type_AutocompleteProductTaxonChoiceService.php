<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_AutocompleteProductTaxonChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.autocomplete_product_taxon_choice' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Taxon\ProductTaxonAutocompleteChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Taxon/ProductTaxonAutocompleteChoiceType.php';

        $a = ($container->services['sylius.repository.product_taxon'] ?? $container->load('getSylius_Repository_ProductTaxonService'));

        if (isset($container->services['sylius.form.type.autocomplete_product_taxon_choice'])) {
            return $container->services['sylius.form.type.autocomplete_product_taxon_choice'];
        }

        return $container->services['sylius.form.type.autocomplete_product_taxon_choice'] = new \Sylius\Bundle\CoreBundle\Form\Type\Taxon\ProductTaxonAutocompleteChoiceType(($container->services['sylius.factory.product_taxon'] ??= new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductTaxon')), $a);
    }
}
