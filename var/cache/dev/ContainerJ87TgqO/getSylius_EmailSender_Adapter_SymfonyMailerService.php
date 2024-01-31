<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailSender_Adapter_SymfonyMailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_sender.adapter.symfony_mailer' shared service.
     *
     * @return \Sylius\Bundle\MailerBundle\Sender\Adapter\SymfonyMailerAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Adapter/CcAwareAdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Bundle/Sender/Adapter/SymfonyMailerAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->services['sylius.email_sender.adapter.symfony_mailer'])) {
            return $container->services['sylius.email_sender.adapter.symfony_mailer'];
        }
        $b = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->services['sylius.email_sender.adapter.symfony_mailer'])) {
            return $container->services['sylius.email_sender.adapter.symfony_mailer'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['sylius.email_sender.adapter.symfony_mailer'])) {
            return $container->services['sylius.email_sender.adapter.symfony_mailer'];
        }

        $container->services['sylius.email_sender.adapter.symfony_mailer'] = $instance = new \Sylius\Bundle\MailerBundle\Sender\Adapter\SymfonyMailerAdapter(new \Symfony\Component\Mailer\Mailer($a, $b, $c));

        if ($container->has('event_dispatcher')) {
            $instance->setEventDispatcher($c);
        }

        return $instance;
    }
}
