<?php

namespace IikoPhp\SDK\Cloud\Concerns;

abstract class MappedObject extends CloudObject
{
    abstract protected static function endpoint(): string;

    protected static function objectSource(): string
    {
        return '';
    }

    protected static function apiParams(): array
    {
        return [];
    }
}