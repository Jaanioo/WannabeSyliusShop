<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shop_user' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\User\ShopUserType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Form/Type/UserType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/User/ShopUserType.php';

        return $container->services['sylius.form.type.shop_user'] = new \Sylius\Bundle\CoreBundle\Form\Type\User\ShopUserType('App\\Entity\\User\\ShopUser', $container->parameters['sylius.form.type.shop_user.validation_groups']);
    }
}
