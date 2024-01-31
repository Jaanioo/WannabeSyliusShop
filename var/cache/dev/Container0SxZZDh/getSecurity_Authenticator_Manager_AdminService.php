<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }
        $b = ($container->privates['security.authenticator.remember_me.admin'] ?? $container->load('getSecurity_Authenticator_RememberMe_AdminService'));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }
        $c = ($container->privates['debug.security.event_dispatcher.admin'] ?? self::getDebug_Security_EventDispatcher_AdminService($container));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }

        return $container->privates['security.authenticator.manager.admin'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a, $b], ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $c, 'admin', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}
