<?php

namespace Container0SxZZDh;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/CheckoutStepsHelper.php';

class CheckoutStepsHelperGhostFd84a5b extends \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null],
        "\0".parent::class."\0".'orderPaymentMethodSelectionRequirementChecker' => [parent::class, 'orderPaymentMethodSelectionRequirementChecker', null],
        "\0".parent::class."\0".'orderShippingMethodSelectionRequirementChecker' => [parent::class, 'orderShippingMethodSelectionRequirementChecker', null],
        'charset' => [parent::class, 'charset', null],
        'orderPaymentMethodSelectionRequirementChecker' => [parent::class, 'orderPaymentMethodSelectionRequirementChecker', null],
        'orderShippingMethodSelectionRequirementChecker' => [parent::class, 'orderShippingMethodSelectionRequirementChecker', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CheckoutStepsHelperGhostFd84a5b', false)) {
    \class_alias(__NAMESPACE__.'\\CheckoutStepsHelperGhostFd84a5b', 'CheckoutStepsHelperGhostFd84a5b', false);
}
