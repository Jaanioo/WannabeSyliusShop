<?php

namespace Container0SxZZDh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.purger_factory.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['fidry_alice_data_fixtures.persistence.purger_factory.doctrine'] = $container->createProxy('PurgerGhost348a0c0', static fn () => \PurgerGhost348a0c0::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

        return ($lazyLoad->__construct(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container))) && false ?: $lazyLoad);
    }
}
