<?php

namespace Container0SxZZDh;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContextInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContext.php';

class ShopperContextGhostEa43fa2 extends \Sylius\Component\Core\Context\ShopperContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'channelContext' => [parent::class, 'channelContext', null],
        "\0".parent::class."\0".'currencyContext' => [parent::class, 'currencyContext', null],
        "\0".parent::class."\0".'customerContext' => [parent::class, 'customerContext', null],
        "\0".parent::class."\0".'localeContext' => [parent::class, 'localeContext', null],
        'channelContext' => [parent::class, 'channelContext', null],
        'currencyContext' => [parent::class, 'currencyContext', null],
        'customerContext' => [parent::class, 'customerContext', null],
        'localeContext' => [parent::class, 'localeContext', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ShopperContextGhostEa43fa2', false)) {
    \class_alias(__NAMESPACE__.'\\ShopperContextGhostEa43fa2', 'ShopperContextGhostEa43fa2', false);
}
