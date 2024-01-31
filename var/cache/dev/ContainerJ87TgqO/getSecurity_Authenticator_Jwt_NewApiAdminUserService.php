<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Jwt_NewApiAdminUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.jwt.new_api_admin_user' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/ForwardCompatAuthenticatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/JWTAuthenticator.php';

        $a = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authenticator.jwt.new_api_admin_user'])) {
            return $container->privates['security.authenticator.jwt.new_api_admin_user'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authenticator.jwt.new_api_admin_user'])) {
            return $container->privates['security.authenticator.jwt.new_api_admin_user'];
        }
        $c = ($container->privates['sylius.admin_user_provider.email_or_name_based'] ?? $container->load('getSylius_AdminUserProvider_EmailOrNameBasedService'));

        if (isset($container->privates['security.authenticator.jwt.new_api_admin_user'])) {
            return $container->privates['security.authenticator.jwt.new_api_admin_user'];
        }

        return $container->privates['security.authenticator.jwt.new_api_admin_user'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator($a, $b, ($container->privates['lexik_jwt_authentication.extractor.chain_extractor'] ?? $container->load('getLexikJwtAuthentication_Extractor_ChainExtractorService')), $c, ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
