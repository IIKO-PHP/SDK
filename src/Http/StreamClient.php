<?php

namespace IikoPhp\SDK\Http;

/**
 * PHP Streams HTTP client
 * @package IikoPhp\SDK\Http
 */
class StreamClient implements Client
{
    /**
     * @inheritDoc
     */
    public function get(string $url, array $headers = []): string
    {
        $context = stream_context_create([
            'http' => [
                'header' => array_merge($headers, [
                    "Content-type: application/json"
                ]),
                'user_agent' => 'IikoPHP SDK',
            ]
        ]);
        return file_get_contents($url, null, $context);
    }

    /**
     * @inheritDoc
     */
    public function post(string $url, ?string $payload = null, array $headers = []): string
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'content' => $payload,
                'header' => array_merge($headers, [
                    'Content-type: application/json'
                ]),
                'user_agent' => 'IikoPHP SDK'
            ]
        ]);
        return file_get_contents($url, null, $context);
    }
}