<?php

namespace ContainerJ87TgqO;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/FormatMoneyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/FormatMoneyHelper.php';

class FormatMoneyHelperGhost2485263 extends \Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null],
        "\0".parent::class."\0".'moneyFormatter' => [parent::class, 'moneyFormatter', null],
        'charset' => [parent::class, 'charset', null],
        'moneyFormatter' => [parent::class, 'moneyFormatter', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FormatMoneyHelperGhost2485263', false)) {
    \class_alias(__NAMESPACE__.'\\FormatMoneyHelperGhost2485263', 'FormatMoneyHelperGhost2485263', false);
}