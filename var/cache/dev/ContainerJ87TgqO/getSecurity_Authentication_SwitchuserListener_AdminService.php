<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_SwitchuserListener_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.switchuser_listener.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\SwitchUserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/SwitchUserListener.php';

        $a = ($container->privates['sylius.admin_user_provider.email_or_name_based'] ?? $container->load('getSylius_AdminUserProvider_EmailOrNameBasedService'));

        if (isset($container->privates['security.authentication.switchuser_listener.admin'])) {
            return $container->privates['security.authentication.switchuser_listener.admin'];
        }
        $b = ($container->privates['debug.security.access.decision_manager'] ?? self::getDebug_Security_Access_DecisionManagerService($container));

        if (isset($container->privates['security.authentication.switchuser_listener.admin'])) {
            return $container->privates['security.authentication.switchuser_listener.admin'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authentication.switchuser_listener.admin'])) {
            return $container->privates['security.authentication.switchuser_listener.admin'];
        }
        $d = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['security.authentication.switchuser_listener.admin'])) {
            return $container->privates['security.authentication.switchuser_listener.admin'];
        }

        return $container->privates['security.authentication.switchuser_listener.admin'] = new \Symfony\Component\Security\Http\Firewall\SwitchUserListener(($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $a, ($container->privates['SyliusLabs\\Polyfill\\Symfony\\Security\\Core\\User\\UserChecker'] ?? $container->load('getUserCheckerService')), 'admin', $b, ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $c, false, $d, NULL);
    }
}