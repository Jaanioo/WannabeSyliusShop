<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_NewApiShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.new_api_shop_user' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.jwt.new_api_shop_user'] ?? $container->load('getSecurity_Authenticator_Jwt_NewApiShopUserService'));

        if (isset($container->privates['security.authenticator.manager.new_api_shop_user'])) {
            return $container->privates['security.authenticator.manager.new_api_shop_user'];
        }
        $b = ($container->privates['security.authenticator.json_login.new_api_shop_user'] ?? $container->load('getSecurity_Authenticator_JsonLogin_NewApiShopUserService'));

        if (isset($container->privates['security.authenticator.manager.new_api_shop_user'])) {
            return $container->privates['security.authenticator.manager.new_api_shop_user'];
        }
        $c = ($container->privates['debug.security.event_dispatcher.new_api_shop_user'] ?? $container->load('getDebug_Security_EventDispatcher_NewApiShopUserService'));

        if (isset($container->privates['security.authenticator.manager.new_api_shop_user'])) {
            return $container->privates['security.authenticator.manager.new_api_shop_user'];
        }

        return $container->privates['security.authenticator.manager.new_api_shop_user'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a, $b], ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $c, 'new_api_shop_user', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}
