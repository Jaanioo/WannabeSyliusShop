<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Form_Type_BlockService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.block.form.type.block' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Form/Type/ServiceListType.php';

        $a = ($container->services['sonata.block.manager'] ?? self::getSonata_Block_ManagerService($container));

        if (isset($container->privates['sonata.block.form.type.block'])) {
            return $container->privates['sonata.block.form.type.block'];
        }

        return $container->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($a);
    }
}
