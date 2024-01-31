<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_UserRequestPasswordResetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.user_request_password_reset' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Form\Type\UserRequestPasswordResetType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Form/Type/UserRequestPasswordResetType.php';

        return $container->services['sylius.form.type.user_request_password_reset'] = new \Sylius\Bundle\UserBundle\Form\Type\UserRequestPasswordResetType('Sylius\\Bundle\\UserBundle\\Form\\Model\\PasswordResetRequest', $container->parameters['sylius.form.type.user_request_password_reset.validation_groups']);
    }
}
