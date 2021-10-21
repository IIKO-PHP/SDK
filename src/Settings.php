<?php

namespace IikoPhp\SDK;

use IikoPhp\SDK\Http\Client;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;

class Settings
{
    protected Client $client;

    protected ?LoggerInterface $logger;

    protected ?CacheInterface $cache;

    protected string $path;

    public function __construct(
        Client $client,
        ?LoggerInterface $logger,
        ?CacheInterface $cache,
        string $path = 'https://api-ru.iiko.services/api/1'
    )
    {
        $this->client = $client;
        $this->logger = $logger;
        $this->cache = $cache;
        $this->path = $path;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    public function getCache(): ?CacheInterface
    {
        return $this->cache;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}