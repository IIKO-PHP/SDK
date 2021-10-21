<?php

namespace IikoPhp\SDK;

use IikoPhp\SDK\Cloud\General\Authentication;
use IikoPhp\SDK\Exceptions\ClientCreationException;
use IikoPhp\SDK\Http\PsrClient;
use IikoPhp\SDK\Http\StreamClient;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;

class Factory
{
    protected ?LoggerInterface $logger;

    protected ?CacheInterface $cache;

    protected Settings $settings;

    /**
     * @throws ClientCreationException
     */
    public function __construct(
        ?ClientInterface $httpClient = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null,
        ?LoggerInterface $logger = null,
        ?CacheInterface $cache = null
    )
    {
        $this->settings = $this->createSettings(
            $httpClient, $requestFactory, $streamFactory, $logger, $cache
        );
    }

    /**
     * @throws ClientCreationException
     */
    protected function createSettings(
        ?ClientInterface $httpClient,
        ?RequestFactoryInterface $requestFactory,
        ?StreamFactoryInterface $streamFactory,
        ?LoggerInterface $logger,
        ?CacheInterface $cache
    ): Settings
    {
        $factoriesHasNull = $requestFactory === null || $streamFactory === null;
        if ($httpClient !== null && $factoriesHasNull) {
            throw new ClientCreationException();
        }

        $client = $httpClient === null?
            new StreamClient():
            new PsrClient($httpClient, $requestFactory, $streamFactory);

        return new Settings($client, $logger, $cache);
    }

    public function cloud(string $key): Cloud
    {
        $authentication = new Authentication($this->settings, $key);
        return new Cloud(null, $this->settings, $authentication);
    }
}