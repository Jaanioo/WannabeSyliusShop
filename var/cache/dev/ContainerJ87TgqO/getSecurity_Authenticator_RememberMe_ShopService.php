<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMe_ShopService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/RememberMeAuthenticator.php';

        return $container->privates['security.authenticator.remember_me.shop'] = new \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator(($container->privates['security.authenticator.remember_me_handler.shop'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_ShopService')), $container->getEnv('APP_SECRET'), ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), 'APP_SHOP_REMEMBER_ME', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
    }
}
