<?php

namespace Symfony\Config\SyliusUser\ResourcesConfig\User;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Verification'.\DIRECTORY_SEPARATOR.'TokenConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VerificationConfig 
{
    private $token;
    private $_usedProperties = [];

    /**
     * @default {"length":16,"field_name":"emailVerificationToken"}
    */
    public function token(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig
    {
        if (null === $this->token) {
            $this->_usedProperties['token'] = true;
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "token()" has already been initialized. You cannot pass values the second time you call token().');
        }

        return $this->token;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('token', $value)) {
            $this->_usedProperties['token'] = true;
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig($value['token']);
            unset($value['token']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['token'])) {
            $output['token'] = $this->token->toArray();
        }

        return $output;
    }

}
