<?php

namespace IikoPhp\SDK\Cloud\Concerns;

abstract class PlainObject extends CloudObject
{
    abstract protected static function endpoint(): string;

    abstract protected static function objectSource(): string;

    protected static function apiParams(): array
    {
        return [];
    }

    protected static function apiMapping($response): array
    {
        return $response;
    }
}