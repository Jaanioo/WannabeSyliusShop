<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordHandler2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\ResetPasswordHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\ResetPasswordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/MessageHandler/Admin/Account/ResetPasswordHandler.php';

        $a = ($container->services['sylius.user_password_resetter.admin'] ?? $container->load('getSylius_UserPasswordResetter_AdminService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler'] = new \Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\ResetPasswordHandler($a);
    }
}