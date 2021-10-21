<?php

namespace IikoPhp\SDK\Cloud\Concerns;

use IikoPhp\SDK\Cloud\Exceptions\ApiCallException;
use JsonException;

trait MapInto
{
    /**
     * @throws ApiCallException
     * @throws JsonException
     */
    protected function mapInto(string $property, string $className): array
    {
        /** @var CloudObject $className */
        return $className::all($this, $this->getMappedProp($property));
    }

    /**
     * @throws ApiCallException
     * @throws JsonException
     */
    public function __get($name)
    {
        if (!empty($this->internalMappings()[$name])) {
            return $this->mapInto($name, $this->internalMappings()[$name]);
        }
        return parent::__get($name);
    }

    protected function internalMappings(): array
    {
        return [];
    }
}