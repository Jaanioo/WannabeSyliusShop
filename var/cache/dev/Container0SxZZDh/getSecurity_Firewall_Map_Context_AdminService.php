<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.firewall.map.context.admin'])) {
            return $container->privates['security.firewall.map.context.admin'];
        }
        $b = ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'));

        if (isset($container->privates['security.firewall.map.context.admin'])) {
            return $container->privates['security.firewall.map.context.admin'];
        }
        $c = ($container->privates['debug.security.event_dispatcher.admin'] ?? self::getDebug_Security_EventDispatcher_AdminService($container));

        if (isset($container->privates['security.firewall.map.context.admin'])) {
            return $container->privates['security.firewall.map.context.admin'];
        }
        $d = ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));

        return $container->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? self::getSecurity_ContextListener_0Service($container));
            yield 2 => ($container->privates['debug.security.firewall.authenticator.admin'] ?? $container->load('getDebug_Security_Firewall_Authenticator_AdminService'));
            yield 3 => ($container->privates['security.authentication.switchuser_listener.admin'] ?? $container->load('getSecurity_Authentication_SwitchuserListener_AdminService'));
            yield 4 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), $a, 'admin', $b, NULL, NULL, ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, $c, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'sylius_admin_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.WtEFXHZ', true, false, 'sylius.admin_user_provider.email_or_name_based', 'admin', 'security.authenticator.form_login.admin', NULL, NULL, ['switch_user', 'form_login', 'remember_me'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH', 'target_route' => NULL], ['path' => 'sylius_admin_logout', 'target' => 'sylius_admin_login', 'enable_csrf' => NULL, 'csrf_token_id' => 'logout', 'csrf_parameter' => '_csrf_token', 'invalidate_session' => true, 'clear_site_data' => [], 'delete_cookies' => []]));
    }
}
