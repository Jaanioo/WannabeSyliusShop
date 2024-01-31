<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ResourceAutocompleteChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.resource_autocomplete_choice' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/ResourceAutocompleteChoiceType.php';

        $a = ($container->services['sylius.repository.adjustment'] ?? $container->load('getSylius_Repository_AdjustmentService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $b = ($container->services['sylius.repository.order_sequence'] ?? $container->load('getSylius_Repository_OrderSequenceService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $c = ($container->services['sylius.repository.product_translation'] ?? $container->load('getSylius_Repository_ProductTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $d = ($container->services['sylius.repository.product_variant_translation'] ?? $container->load('getSylius_Repository_ProductVariantTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $e = ($container->services['sylius.repository.product_option_translation'] ?? $container->load('getSylius_Repository_ProductOptionTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $f = ($container->services['sylius.repository.product_association'] ?? $container->load('getSylius_Repository_ProductAssociationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $g = ($container->services['sylius.repository.product_association_type_translation'] ?? $container->load('getSylius_Repository_ProductAssociationTypeTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $h = ($container->services['sylius.repository.product_option_value'] ?? $container->load('getSylius_Repository_ProductOptionValueService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $i = ($container->services['sylius.repository.product_option_value_translation'] ?? $container->load('getSylius_Repository_ProductOptionValueTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $j = ($container->services['sylius.repository.product_attribute_translation'] ?? $container->load('getSylius_Repository_ProductAttributeTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $k = ($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $l = ($container->services['sylius.repository.shipment_unit'] ?? $container->load('getSylius_Repository_ShipmentUnitService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $m = ($container->services['sylius.repository.shipping_method_translation'] ?? $container->load('getSylius_Repository_ShippingMethodTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $n = ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $o = ($container->services['sylius.repository.shipping_method_rule'] ?? $container->load('getSylius_Repository_ShippingMethodRuleService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $p = ($container->services['sylius.repository.payment_method_translation'] ?? $container->load('getSylius_Repository_PaymentMethodTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $q = ($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $r = ($container->services['sylius.repository.catalog_promotion_translation'] ?? $container->load('getSylius_Repository_CatalogPromotionTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $s = ($container->services['sylius.repository.catalog_promotion_scope'] ?? $container->load('getSylius_Repository_CatalogPromotionScopeService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $t = ($container->services['sylius.repository.promotion_subject'] ?? $container->load('getSylius_Repository_PromotionSubjectService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $u = ($container->services['sylius.repository.catalog_promotion_action'] ?? $container->load('getSylius_Repository_CatalogPromotionActionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $v = ($container->services['sylius.repository.promotion_rule'] ?? $container->load('getSylius_Repository_PromotionRuleService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $w = ($container->services['sylius.repository.promotion_action'] ?? $container->load('getSylius_Repository_PromotionActionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $x = ($container->services['sylius.repository.address_log_entry'] ?? $container->load('getSylius_Repository_AddressLogEntryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $y = ($container->services['sylius.repository.inventory_unit'] ?? $container->load('getSylius_Repository_InventoryUnitService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $z = ($container->services['sylius.repository.taxon_translation'] ?? $container->load('getSylius_Repository_TaxonTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $aa = ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ba = ($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ca = ($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $da = ($container->services['sylius.repository.product_reviewer'] ?? $container->load('getSylius_Repository_ProductReviewerService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ea = ($container->services['sylius.repository.product_image'] ?? $container->load('getSylius_Repository_ProductImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $fa = ($container->services['sylius.repository.taxon_image'] ?? $container->load('getSylius_Repository_TaxonImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ga = ($container->services['sylius.repository.avatar_image'] ?? $container->load('getSylius_Repository_AvatarImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ha = ($container->services['sylius.repository.shop_billing_data'] ?? $container->load('getSylius_Repository_ShopBillingDataService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ia = ($container->services['sylius.repository.payment_security_token'] ?? $container->load('getSylius_Repository_PaymentSecurityTokenService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ja = ($container->services['sylius.repository.gateway_config'] ?? $container->load('getSylius_Repository_GatewayConfigService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ka = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Resource\\Repository\\RepositoryInterface', 'resource repository');
        $ka->register('sylius.adjustment', $a);
        $ka->register('sylius.order', ($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)));
        $ka->register('sylius.order_item', ($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')));
        $ka->register('sylius.order_item_unit', ($container->services['sylius.repository.order_item_unit'] ?? $container->load('getSylius_Repository_OrderItemUnitService')));
        $ka->register('sylius.order_sequence', $b);
        $ka->register('sylius.currency', ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService')));
        $ka->register('sylius.exchange_rate', ($container->services['sylius.repository.exchange_rate'] ?? self::getSylius_Repository_ExchangeRateService($container)));
        $ka->register('sylius.locale', ($container->services['sylius.repository.locale'] ?? self::getSylius_Repository_LocaleService($container)));
        $ka->register('sylius.product', ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
        $ka->register('sylius.product_translation', $c);
        $ka->register('sylius.product_variant', ($container->services['sylius.repository.product_variant'] ?? self::getSylius_Repository_ProductVariantService($container)));
        $ka->register('sylius.product_variant_translation', $d);
        $ka->register('sylius.product_option', ($container->services['sylius.repository.product_option'] ?? $container->load('getSylius_Repository_ProductOptionService')));
        $ka->register('sylius.product_option_translation', $e);
        $ka->register('sylius.product_association', $f);
        $ka->register('sylius.product_association_type', ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')));
        $ka->register('sylius.product_association_type_translation', $g);
        $ka->register('sylius.product_option_value', $h);
        $ka->register('sylius.product_option_value_translation', $i);
        $ka->register('sylius.channel', ($container->services['sylius.repository.channel'] ?? self::getSylius_Repository_ChannelService($container)));
        $ka->register('sylius.product_attribute', ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService')));
        $ka->register('sylius.product_attribute_translation', $j);
        $ka->register('sylius.product_attribute_value', ($container->services['sylius.repository.product_attribute_value'] ?? $container->load('getSylius_Repository_ProductAttributeValueService')));
        $ka->register('sylius.tax_rate', ($container->services['sylius.repository.tax_rate'] ?? $container->load('getSylius_Repository_TaxRateService')));
        $ka->register('sylius.tax_category', $k);
        $ka->register('sylius.shipment', ($container->services['sylius.repository.shipment'] ?? self::getSylius_Repository_ShipmentService($container)));
        $ka->register('sylius.shipment_unit', $l);
        $ka->register('sylius.shipping_method', ($container->services['sylius.repository.shipping_method'] ?? self::getSylius_Repository_ShippingMethodService($container)));
        $ka->register('sylius.shipping_method_translation', $m);
        $ka->register('sylius.shipping_category', $n);
        $ka->register('sylius.shipping_method_rule', $o);
        $ka->register('sylius.payment', ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')));
        $ka->register('sylius.payment_method', ($container->services['sylius.repository.payment_method'] ?? self::getSylius_Repository_PaymentMethodService($container)));
        $ka->register('sylius.payment_method_translation', $p);
        $ka->register('sylius.catalog_promotion', $q);
        $ka->register('sylius.catalog_promotion_translation', $r);
        $ka->register('sylius.catalog_promotion_scope', $s);
        $ka->register('sylius.promotion_subject', $t);
        $ka->register('sylius.promotion', ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService')));
        $ka->register('sylius.promotion_coupon', ($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
        $ka->register('sylius.catalog_promotion_action', $u);
        $ka->register('sylius.promotion_rule', $v);
        $ka->register('sylius.promotion_action', $w);
        $ka->register('sylius.address', ($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')));
        $ka->register('sylius.address_log_entry', $x);
        $ka->register('sylius.country', ($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
        $ka->register('sylius.province', ($container->services['sylius.repository.province'] ?? self::getSylius_Repository_ProvinceService($container)));
        $ka->register('sylius.zone', ($container->services['sylius.repository.zone'] ?? self::getSylius_Repository_ZoneService($container)));
        $ka->register('sylius.zone_member', ($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService')));
        $ka->register('sylius.inventory_unit', $y);
        $ka->register('sylius.taxon', ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')));
        $ka->register('sylius.taxon_translation', $z);
        $ka->register('sylius.admin_user', $aa);
        $ka->register('sylius.shop_user', ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
        $ka->register('sylius.oauth_user', $ba);
        $ka->register('sylius.customer', ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
        $ka->register('sylius.customer_group', ($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
        $ka->register('sylius.product_review', $ca);
        $ka->register('sylius.product_reviewer', $da);
        $ka->register('sylius.product_taxon', ($container->services['sylius.repository.product_taxon'] ?? $container->load('getSylius_Repository_ProductTaxonService')));
        $ka->register('sylius.product_image', $ea);
        $ka->register('sylius.taxon_image', $fa);
        $ka->register('sylius.channel_pricing', ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService')));
        $ka->register('sylius.avatar_image', $ga);
        $ka->register('sylius.shop_billing_data', $ha);
        $ka->register('sylius.payment_security_token', $ia);
        $ka->register('sylius.gateway_config', $ja);

        return $container->services['sylius.form.type.resource_autocomplete_choice'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType($ka);
    }
}
