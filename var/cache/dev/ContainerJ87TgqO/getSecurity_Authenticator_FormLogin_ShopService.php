<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_ShopService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.form_login.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Authentication/AuthenticationFailureHandler.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.authenticator.form_login.shop'])) {
            return $container->privates['security.authenticator.form_login.shop'];
        }
        $b = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.authenticator.form_login.shop'])) {
            return $container->privates['security.authenticator.form_login.shop'];
        }

        return $container->privates['security.authenticator.form_login.shop'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($a, ($container->privates['sylius.shop_user_provider.email_or_name_based'] ?? $container->load('getSylius_ShopUserProvider_EmailOrNameBasedService')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Sylius\Bundle\UserBundle\Authentication\AuthenticationSuccessHandler($a, [], ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container))), ['login_path' => 'sylius_shop_login', 'default_target_path' => 'sylius_shop_homepage', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'], 'shop'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Sylius\Bundle\UserBundle\Authentication\AuthenticationFailureHandler($b, $a, [], ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container))), ['login_path' => 'sylius_shop_login', 'failure_path' => 'sylius_shop_login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ['login_path' => 'sylius_shop_login', 'check_path' => 'sylius_shop_login_check', 'use_forward' => false, 'enable_csrf' => true, 'csrf_parameter' => '_csrf_shop_security_token', 'csrf_token_id' => 'shop_authenticate', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'post_only' => true, 'form_only' => false]);
    }
}
