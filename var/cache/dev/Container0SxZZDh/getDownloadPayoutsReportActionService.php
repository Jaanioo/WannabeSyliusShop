<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDownloadPayoutsReportActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\DownloadPayoutsReportAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\DownloadPayoutsReportAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/DownloadPayoutsReportAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Downloader/PayoutsReportDownloaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Downloader/SftpPayoutsReportDownloader.php';
        include_once \dirname(__DIR__, 4).'/vendor/phpseclib/phpseclib/phpseclib/Net/SSH2.php';
        include_once \dirname(__DIR__, 4).'/vendor/phpseclib/phpseclib/phpseclib/Net/SFTP.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\DownloadPayoutsReportAction'] = new \Sylius\PayPalPlugin\Controller\DownloadPayoutsReportAction(new \Sylius\PayPalPlugin\Downloader\SftpPayoutsReportDownloader(new \phpseclib\Net\SFTP('reports.sandbox.paypal.com')), ($container->services['sylius.repository.payment_method'] ?? self::getSylius_Repository_PaymentMethodService($container)));
    }
}
