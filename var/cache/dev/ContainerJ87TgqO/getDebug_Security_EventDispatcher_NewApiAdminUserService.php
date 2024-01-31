<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_EventDispatcher_NewApiAdminUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.event_dispatcher.new_api_admin_user' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['debug.security.event_dispatcher.new_api_admin_user'] = $instance = new \Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [#[\Closure(name: 'security.listener.new_api_admin_user.user_provider', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserProviderListener')] fn () => ($container->privates['security.listener.new_api_admin_user.user_provider'] ?? $container->load('getSecurity_Listener_NewApiAdminUser_UserProviderService')), 'checkPassport'], 2048);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [#[\Closure(name: 'security.listener.user_checker.new_api_admin_user', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserCheckerListener')] fn () => ($container->privates['security.listener.user_checker.new_api_admin_user'] ?? $container->load('getSecurity_Listener_UserChecker_NewApiAdminUserService')), 'preCheckCredentials'], 256);
        $instance->addListener('security.authentication.success', [#[\Closure(name: 'security.listener.user_checker.new_api_admin_user', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserCheckerListener')] fn () => ($container->privates['security.listener.user_checker.new_api_admin_user'] ?? $container->load('getSecurity_Listener_UserChecker_NewApiAdminUserService')), 'postCheckCredentials'], 256);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [#[\Closure(name: 'security.listener.user_provider', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserProviderListener')] fn () => ($container->privates['security.listener.user_provider'] ?? $container->load('getSecurity_Listener_UserProviderService')), 'checkPassport'], 1024);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.admin_user.listener.update_user_encoder', class: 'Sylius\\Bundle\\UserBundle\\EventListener\\UpdateUserEncoderListener')] fn () => ($container->privates['sylius.admin_user.listener.update_user_encoder'] ?? $container->load('getSylius_AdminUser_Listener_UpdateUserEncoderService')), 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.shop_user.listener.update_user_encoder', class: 'Sylius\\Bundle\\UserBundle\\EventListener\\UpdateUserEncoderListener')] fn () => ($container->privates['sylius.shop_user.listener.update_user_encoder'] ?? $container->load('getSylius_ShopUser_Listener_UpdateUserEncoderService')), 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.listener.shop_cart_blamer', class: 'Sylius\\Bundle\\ShopBundle\\EventListener\\ShopCartBlamerListener')] fn () => ($container->services['sylius.listener.shop_cart_blamer'] ?? $container->load('getSylius_Listener_ShopCartBlamerService')), 'onInteractiveLogin'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.listener.user_cart_recalculation', class: 'Sylius\\Bundle\\ShopBundle\\EventListener\\UserCartRecalculationListener')] fn () => ($container->services['sylius.listener.user_cart_recalculation'] ?? $container->load('getSylius_Listener_UserCartRecalculationService')), 'recalculateCartWhileLogin'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [#[\Closure(name: 'Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener')] fn () => ($container->privates['Sylius\\Bundle\\ApiBundle\\EventListener\\ApiCartBlamerListener'] ?? $container->load('getApiCartBlamerListenerService')), 'onLoginSuccess'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [#[\Closure(name: 'security.listener.check_authenticator_credentials', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CheckCredentialsListener')] fn () => ($container->privates['security.listener.check_authenticator_credentials'] ?? $container->load('getSecurity_Listener_CheckAuthenticatorCredentialsService')), 'checkPassport'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [#[\Closure(name: 'security.listener.password_migrating', class: 'Symfony\\Component\\Security\\Http\\EventListener\\PasswordMigratingListener')] fn () => ($container->privates['security.listener.password_migrating'] ?? $container->load('getSecurity_Listener_PasswordMigratingService')), 'onLoginSuccess'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.listener.admin_user_last_login', class: 'Sylius\\Bundle\\UserBundle\\EventListener\\UserLastLoginSubscriber')] fn () => ($container->privates['sylius.listener.admin_user_last_login'] ?? $container->load('getSylius_Listener_AdminUserLastLoginService')), 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.listener.shop_user_last_login', class: 'Sylius\\Bundle\\UserBundle\\EventListener\\UserLastLoginSubscriber')] fn () => ($container->privates['sylius.listener.shop_user_last_login'] ?? $container->load('getSylius_Listener_ShopUserLastLoginService')), 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('security.interactive_login', [#[\Closure(name: 'sylius.listener.oauth_user_last_login', class: 'Sylius\\Bundle\\UserBundle\\EventListener\\UserLastLoginSubscriber')] fn () => ($container->privates['sylius.listener.oauth_user_last_login'] ?? $container->load('getSylius_Listener_OauthUserLastLoginService')), 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [#[\Closure(name: 'security.listener.csrf_protection', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CsrfProtectionListener')] fn () => ($container->privates['security.listener.csrf_protection'] ?? $container->load('getSecurity_Listener_CsrfProtectionService')), 'checkPassport'], 512);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [#[\Closure(name: 'security.logout.listener.csrf_token_clearing', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CsrfTokenClearingLogoutListener')] fn () => ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService')), 'onLogout'], 0);

        return $instance;
    }
}
