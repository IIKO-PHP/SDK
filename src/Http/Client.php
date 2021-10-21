<?php

namespace IikoPhp\SDK\Http;

/**
 * HTTP Client Interface
 * @package IikoPhp\SDK\Http
 */
interface Client
{
    /**
     * Perform GET HTTP request
     * @param string $url
     * @param array $headers
     * @return string
     */
    public function get(string $url, array $headers = []): string;

    /**
     * Perform POST HTTP request
     * @param string $url
     * @param string|null $payload
     * @param array $headers
     * @return string
     */
    public function post(string $url, ?string $payload = null, array $headers = []): string;
}