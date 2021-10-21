<?php

namespace IikoPhp\SDK\Cloud\General;

use IikoPhp\SDK\Cloud\Operations;
use IikoPhp\SDK\Settings;
use JsonException;
use function json_decode;
use function json_encode;

class Authentication implements Operations
{
    private const ACCESS_TOKEN_ENDPOINT = '/access_token';

    protected ?string $accessToken;

    protected string $key;

    protected Settings $settings;

    protected ?string $lastOperation;

    public function __construct(Settings $settings, string $key)
    {
        $this->key = $key;
        $this->settings = $settings;
    }

    /**
     * @throws JsonException
     */
    public function authenticate(): string
    {
        $body = json_encode([
            "apiLogin" => $this->key
        ], JSON_THROW_ON_ERROR);

        $response = $this
            ->settings
            ->getClient()
            ->post($this->settings->getPath().self::ACCESS_TOKEN_ENDPOINT, $body, [
                'content-type: application/json'
            ]);

        [
            'correlationId' => $this->lastOperation,
            'token' => $this->accessToken
        ] = json_decode($response, true, 512, JSON_THROW_ON_ERROR);

        return $this->accessToken;
    }

    /**
     * @throws JsonException
     */
    public function accessToken(): string
    {
        return $this->accessToken ?? $this->authenticate();
    }

    public function getLastOperation(): ?string
    {
        return $this->lastOperation;
    }
}