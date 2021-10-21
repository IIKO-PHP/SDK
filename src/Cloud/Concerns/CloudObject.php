<?php

namespace IikoPhp\SDK\Cloud\Concerns;

use IikoPhp\SDK\Cloud\ApiClient;
use IikoPhp\SDK\Cloud\Exceptions\ApiCallException;
use JsonException;

abstract class CloudObject extends ApiClient
{
    use MapInto;

    abstract protected static function endpoint(): string;

    abstract protected static function objectSource(): string;

    abstract protected static function apiParams(): array;

    private static function newInstance(ApiClient $client, array $raw = [])
    {
        return static::createMapped($client, $raw);
    }

    /**
     * @throws ApiCallException
     * @throws JsonException
     */
    public static function all(ApiClient $client, array $details = []): array
    {
        $results = [];

        $response = static::newInstance($client)->call(
            array_merge(static::apiParams(), $details)
        );

        $mapped = static::apiMapping($response);

        if(static::objectSource() !== '') {
            $results = array_map(
                static fn($raw) => is_array($raw) ? static::newInstance(
                    $client, $raw
                ) : null,
                $mapped[static::objectSource()]
            );
        } else {
            foreach ($mapped as $listItem) {
                $results[] = static::newInstance($client, $listItem);
            }
        }

        $results = array_filter($results);

        return [
            $response['correlationId']??'Not recorded',
            $results
        ];
    }

    abstract protected static function apiMapping($response): array;
}