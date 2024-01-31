<?php

namespace Container0SxZZDh;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/PriceHelper.php';

class PriceHelperGhostFdbd05d extends \Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null],
        "\0".parent::class."\0".'productVariantPriceCalculator' => [parent::class, 'productVariantPriceCalculator', null],
        'charset' => [parent::class, 'charset', null],
        'productVariantPriceCalculator' => [parent::class, 'productVariantPriceCalculator', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PriceHelperGhostFdbd05d', false)) {
    \class_alias(__NAMESPACE__.'\\PriceHelperGhostFdbd05d', 'PriceHelperGhostFdbd05d', false);
}
