<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWinzouStateMachineDebugCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'winzou\Bundle\StateMachineBundle\Command\winzouStateMachineDebugCommand' shared autowired service.
     *
     * @return \winzou\Bundle\StateMachineBundle\Command\winzouStateMachineDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine-bundle/Command/winzouStateMachineDebugCommand.php';

        $container->privates['winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand'] = $instance = new \winzou\Bundle\StateMachineBundle\Command\winzouStateMachineDebugCommand($container->parameters['sm.configs']);

        $instance->setName('debug:winzou:state-machine');

        return $instance;
    }
}
