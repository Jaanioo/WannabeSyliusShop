<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Repository/ProductRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Doctrine/ORM/ProductRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Repository/ProductRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductRepository.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository'] = $container->get('sylius.repository.product');
    }
}