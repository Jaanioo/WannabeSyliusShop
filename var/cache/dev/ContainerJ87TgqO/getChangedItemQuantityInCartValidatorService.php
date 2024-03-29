<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangedItemQuantityInCartValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\ChangedItemQuantityInCartValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\ChangedItemQuantityInCartValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Validator/Constraints/ChangedItemQuantityInCartValidator.php';

        $a = ($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\ChangedItemQuantityInCartValidator'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\ChangedItemQuantityInCartValidator'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\ChangedItemQuantityInCartValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\ChangedItemQuantityInCartValidator($a, ($container->services['sylius.repository.order'] ?? self::getSylius_Repository_OrderService($container)), ($container->services['sylius.availability_checker.default'] ??= new \Sylius\Component\Inventory\Checker\AvailabilityChecker()));
    }
}
