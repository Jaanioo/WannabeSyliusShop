<?php

namespace Container0SxZZDh;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

class CsvFileLoaderGhost7800afb extends \Symfony\Component\Translation\Loader\CsvFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'delimiter' => [parent::class, 'delimiter', null],
        "\0".parent::class."\0".'enclosure' => [parent::class, 'enclosure', null],
        "\0".parent::class."\0".'escape' => [parent::class, 'escape', null],
        'delimiter' => [parent::class, 'delimiter', null],
        'enclosure' => [parent::class, 'enclosure', null],
        'escape' => [parent::class, 'escape', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CsvFileLoaderGhost7800afb', false)) {
    \class_alias(__NAMESPACE__.'\\CsvFileLoaderGhost7800afb', 'CsvFileLoaderGhost7800afb', false);
}
