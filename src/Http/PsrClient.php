<?php

namespace IikoPhp\SDK\Http;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * PSR-18 compatible client
 * @package IikoPhp\SDK\Http
 */
class PsrClient implements Client
{
    /**
     * @var ClientInterface PSR-18 compatible HTTP client
     */
    protected ClientInterface $client;

    /**
     * @var RequestFactoryInterface PSR-17 compatible HTTP Request factory
     */
    protected RequestFactoryInterface $requestFactory;

    /**
     * @var StreamFactoryInterface PSR-17 compatible HTTP Stream factory
     */
    protected StreamFactoryInterface $streamFactory;

    public function __construct(
        ClientInterface $client,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory
    )
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
    }

    /**
     * @inheritDoc
     * @throws ClientExceptionInterface
     */
    public function get(string $url, array $headers = []): string
    {
        $request = $this->requestFactory->createRequest('GET', $url);

        $request = $this->addHeaders($request, $headers);

        return $this->client
            ->sendRequest($request)
            ->getBody()
            ->getContents();
    }

    /**
     * @inheritDoc
     * @throws ClientExceptionInterface
     */
    public function post(string $url, string $payload = null, array $headers = []): string
    {
        $request = $this->requestFactory->createRequest('POST', $url);
        $stream = $this->streamFactory->createStream($payload);

        $request = $this->addHeaders($request, $headers);

        $request = $request->withBody($stream);

        $response = $this->client
            ->sendRequest($request);

        return $response
            ->getBody()
            ->getContents();
    }

    protected function addHeaders(RequestInterface $request, array $headers): RequestInterface
    {
        foreach ($headers as $header) {
            [$name, $value] = explode(': ', $header);

            /** @noinspection CallableParameterUseCaseInTypeContextInspection */
            $request = $request->withHeader($name, $value);
        }

        return $request;
    }
}