<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGaufrette_SyliusImageFilesystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gaufrette.sylius_image_filesystem' shared service.
     *
     * @return \Gaufrette\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/StreamFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/ChecksumCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/SizeCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/MimeTypeProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/Local.php';

        return $container->services['gaufrette.sylius_image_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local((\dirname(__DIR__, 4).'/public/media/image'), true));
    }
}
