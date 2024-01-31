<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_UserPasswordResetter_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.user_password_resetter.admin' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Security\UserPasswordResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Security/UserPasswordResetterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Security/UserPasswordResetter.php';

        $a = ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService'));

        if (isset($container->services['sylius.user_password_resetter.admin'])) {
            return $container->services['sylius.user_password_resetter.admin'];
        }

        return $container->services['sylius.user_password_resetter.admin'] = new \Sylius\Bundle\CoreBundle\Security\UserPasswordResetter($a, ($container->services['sylius.security.password_updater'] ?? $container->load('getSylius_Security_PasswordUpdaterService')), 'P1D');
    }
}
