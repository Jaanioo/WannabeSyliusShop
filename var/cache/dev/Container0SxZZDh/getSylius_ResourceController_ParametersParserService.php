<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_ParametersParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.parameters_parser' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\ParametersParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ParametersParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ParametersParser.php';

        return $container->privates['sylius.resource_controller.parameters_parser'] = new \Sylius\Bundle\ResourceBundle\Controller\ParametersParser($container, ($container->privates['sylius.expression_language'] ??= new \Sylius\Bundle\ResourceBundle\ExpressionLanguage\ExpressionLanguage()));
    }
}
