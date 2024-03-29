<?php

namespace Container0SxZZDh;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

class ObjectManagerPersisterGhost3a0c83c extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'metadataToRestore' => [parent::class, 'metadataToRestore', null],
        "\0".parent::class."\0".'objectChecked' => [parent::class, 'objectChecked', null],
        "\0".parent::class."\0".'objectManager' => [parent::class, 'objectManager', null],
        "\0".parent::class."\0".'persistableClasses' => [parent::class, 'persistableClasses', null],
        "\0".parent::class."\0".'unitOfWorkPersistersReflection' => [parent::class, 'unitOfWorkPersistersReflection', null],
        'metadataToRestore' => [parent::class, 'metadataToRestore', null],
        'objectChecked' => [parent::class, 'objectChecked', null],
        'objectManager' => [parent::class, 'objectManager', null],
        'persistableClasses' => [parent::class, 'persistableClasses', null],
        'unitOfWorkPersistersReflection' => [parent::class, 'unitOfWorkPersistersReflection', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ObjectManagerPersisterGhost3a0c83c', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersisterGhost3a0c83c', 'ObjectManagerPersisterGhost3a0c83c', false);
}
