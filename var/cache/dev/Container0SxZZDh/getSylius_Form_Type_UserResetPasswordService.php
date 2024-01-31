<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_UserResetPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.user_reset_password' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Form\Type\UserResetPasswordType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Form/Type/UserResetPasswordType.php';

        return $container->services['sylius.form.type.user_reset_password'] = new \Sylius\Bundle\UserBundle\Form\Type\UserResetPasswordType('Sylius\\Bundle\\UserBundle\\Form\\Model\\PasswordReset', $container->parameters['sylius.form.type.user_reset_password.validation_groups']);
    }
}
