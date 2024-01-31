<?php

namespace ContainerJ87TgqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Persistence_Persister_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.persister.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] = $container->createProxy('ObjectManagerPersisterGhost3a0c83c', static fn () => \ObjectManagerPersisterGhost3a0c83c::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

        return ($lazyLoad->__construct(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container))) && false ?: $lazyLoad);
    }
}
