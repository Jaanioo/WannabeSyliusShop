<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ECSPrefix202306\Symfony\Component\HttpKernel\DependencyInjection;

use ECSPrefix202306\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use ECSPrefix202306\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use ECSPrefix202306\Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use ECSPrefix202306\Symfony\Component\DependencyInjection\ContainerBuilder;
use ECSPrefix202306\Symfony\Component\DependencyInjection\Reference;
use ECSPrefix202306\Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver;
use ECSPrefix202306\Symfony\Component\Stopwatch\Stopwatch;
/**
 * Gathers and configures the argument value resolvers.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ControllerArgumentValueResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('argument_resolver')) {
            return;
        }
        $resolvers = $this->findAndSortTaggedServices('controller.argument_value_resolver', $container);
        if ($container->getParameter('kernel.debug') && \class_exists(Stopwatch::class) && $container->has('debug.stopwatch')) {
            foreach ($resolvers as $resolverReference) {
                $id = (string) $resolverReference;
                $container->register("debug.{$id}", TraceableValueResolver::class)->setDecoratedService($id)->setArguments([new Reference("debug.{$id}.inner"), new Reference('debug.stopwatch')]);
            }
        }
        $container->getDefinition('argument_resolver')->replaceArgument(1, new IteratorArgument($resolvers));
    }
}
