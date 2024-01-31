<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_Extractor_ChainExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.extractor.chain_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/AuthorizationHeaderTokenExtractor.php';

        return $container->privates['lexik_jwt_authentication.extractor.chain_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', $container->getEnv('resolve:SYLIUS_API_AUTHORIZATION_HEADER'))]);
    }
}
