<?php

namespace IikoPhp\SDK\Cloud;

use IikoPhp\SDK\Cloud;
use IikoPhp\SDK\Cloud\Concerns\Mapping;
use IikoPhp\SDK\Cloud\Exceptions\ApiCallException;
use IikoPhp\SDK\Cloud\General\Authentication;
use IikoPhp\SDK\Settings;
use JsonException;

abstract class ApiClient implements Operations
{
    use Mapping;

    abstract protected static function endpoint(): string;

    protected Authentication $authentication;

    protected Settings $settings;

    protected ?string $lastOperationId;

    protected ?Cloud $cloud;

    public function __construct(?Cloud $cloud, Settings $settings, Authentication $authentication)
    {
        $this->authentication = $authentication;
        $this->settings = $settings;
        $this->cloud = $cloud;
    }

    public function getLastOperation(): ?string
    {
        return $this->lastOperationId;
    }

    /**
     * @throws ApiCallException
     * @throws JsonException
     */
    public function call(
        array $payload,
        ?string $endpoint = null
    ): array
    {
        if ($endpoint === null) {
            $endpoint = static::endpoint();
        }

        $body = json_encode($payload, JSON_THROW_ON_ERROR);

        $response = $this
            ->settings
            ->getClient()
            ->post($this->settings->getPath().$endpoint, $body, static::headers($this->authentication));

        return json_decode($response, true, 512, JSON_THROW_ON_ERROR);
    }


    /**
     * @throws JsonException
     */
    protected static function headers(Authentication $authentication): array
    {
        return [
            'Content-type: application/json',
            'Authorization: Bearer '.$authentication->accessToken()
        ];
    }



}