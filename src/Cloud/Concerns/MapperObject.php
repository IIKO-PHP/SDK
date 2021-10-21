<?php

namespace IikoPhp\SDK\Cloud\Concerns;

use IikoPhp\SDK\Cloud\ApiClient;

class MapperObject extends CloudObject
{
    protected static function endpoint(): string
    {
        return '';
    }

    protected static function objectSource(): string
    {
        return '';
    }

    protected static function apiParams(): array
    {
        return [];
    }

    protected static function apiMapping($response): array
    {
        return $response;
    }

    public static function all(ApiClient $client, array $details = []): array
    {
        return array_map(
            static fn($raw) => is_array($raw) ? static::createMapped(
                $client, $raw
            ) : null,
            $details
        );
    }
}