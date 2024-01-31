<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_Sorter_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.sorter.validator' shared service.
     *
     * @return \Sylius\Component\Grid\Validation\SortingParametersValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Validation/SortingParametersValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Validation/SortingParametersValidator.php';

        return $container->services['sylius.grid.sorter.validator'] = new \Sylius\Component\Grid\Validation\SortingParametersValidator();
    }
}
