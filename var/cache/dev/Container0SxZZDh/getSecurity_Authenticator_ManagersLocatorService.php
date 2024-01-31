<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_ManagersLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.managers_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authenticator.managers_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['admin' => #[\Closure(name: 'security.authenticator.manager.admin', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.admin'] ?? $container->load('getSecurity_Authenticator_Manager_AdminService')), 'new_api_admin_user' => #[\Closure(name: 'security.authenticator.manager.new_api_admin_user', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.new_api_admin_user'] ?? $container->load('getSecurity_Authenticator_Manager_NewApiAdminUserService')), 'new_api_shop_user' => #[\Closure(name: 'security.authenticator.manager.new_api_shop_user', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.new_api_shop_user'] ?? $container->load('getSecurity_Authenticator_Manager_NewApiShopUserService')), 'shop' => #[\Closure(name: 'security.authenticator.manager.shop', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.shop'] ?? $container->load('getSecurity_Authenticator_Manager_ShopService'))]);
    }
}
