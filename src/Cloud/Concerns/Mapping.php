<?php

namespace IikoPhp\SDK\Cloud\Concerns;

use IikoPhp\SDK\Cloud\ApiClient;
use IikoPhp\SDK\Cloud\Exceptions\ImmutableException;

trait Mapping
{
    private array $raw;

    public function __get($name)
    {
        if (method_exists($this, $name)) {
            return $this->$name();
        }

        if (method_exists($this, 'listsMap')) {
            return $this->$name();
        }

        return $this->getMappedProp($name);
    }

    protected function getMappedProp(string $name)
    {
        return $this->raw[$name];
    }

    /**
     * @throws ImmutableException
     */
    public function __set($name, $value): void
    {
        throw new ImmutableException();
    }

    public function __isset($name): bool
    {
        return isset($this->raw[$name]);
    }

    private function setMapping(array $raw): void
    {
        $this->raw = $raw;
    }

    public static function createMapped(ApiClient $client, array $raw): ApiClient
    {
        /** @var ApiClient $newInstance */
        $newInstance = new static($client->cloud, $client->settings, $client->authentication);
        $newInstance->setMapping($raw);
        return $newInstance;
    }
}