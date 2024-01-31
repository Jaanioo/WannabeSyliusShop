<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ChannelsCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.channels_collection' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\ChannelCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/ChannelCollectionType.php';

        return $container->services['sylius.form.type.channels_collection'] = new \Sylius\Bundle\CoreBundle\Form\Type\ChannelCollectionType(($container->services['sylius.repository.channel'] ?? self::getSylius_Repository_ChannelService($container)));
    }
}
