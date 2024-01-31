<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCurrency'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusCurrencyConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $resources;
    private $_usedProperties = [];

    /**
     * @default 'doctrine/orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): static
    {
        $this->_usedProperties['driver'] = true;
        $this->driver = $value;

        return $this;
    }

    /**
     * @default {"currency":{"classes":{"model":"Sylius\\Component\\Currency\\Model\\Currency","interface":"Sylius\\Component\\Currency\\Model\\CurrencyInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType"}},"exchange_rate":{"classes":{"model":"Sylius\\Component\\Currency\\Model\\ExchangeRate","interface":"Sylius\\Component\\Currency\\Model\\ExchangeRateInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusCurrency\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusCurrency\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_currency';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusCurrency\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
