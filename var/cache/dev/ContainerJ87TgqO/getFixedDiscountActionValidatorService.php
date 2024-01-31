<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFixedDiscountActionValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\FixedDiscountActionValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\FixedDiscountActionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Validator/CatalogPromotionAction/ActionValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Validator/CatalogPromotion/FixedDiscountActionValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Validator/CatalogPromotionAction/FixedDiscountActionValidator.php';

        $a = ($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? self::getSylius_SectionResolver_UriBasedSectionResolverService($container));

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\FixedDiscountActionValidator'] = new \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\FixedDiscountActionValidator(new \Sylius\Bundle\CoreBundle\CatalogPromotion\Validator\CatalogPromotionAction\FixedDiscountActionValidator(($container->services['sylius.repository.channel'] ?? self::getSylius_Repository_ChannelService($container)), $a), $a);
    }
}