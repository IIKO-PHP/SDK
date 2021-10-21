<?php

namespace IikoPhp\SDK;

use IikoPhp\SDK\Cloud\ApiClient;
use IikoPhp\SDK\Cloud\Concerns\EmptyEndpoint;
use IikoPhp\SDK\Cloud\Delivery;
use IikoPhp\SDK\Cloud\General;
use IikoPhp\SDK\Cloud\General\Organization;

/**
 * Class Cloud
 * @package IikoPhp\SDK
 * @property General general
 * @property Delivery delivery
 */
class Cloud extends ApiClient
{
    use EmptyEndpoint;

    private General $general;

    private Delivery $delivery;

    public function selectOrganizations(?array $organizations = null): array
    {
        $organizations ??= $this->general()->organizations;

        $organizations = array_filter(
            $organizations,
            static fn($element) => $element instanceof Organization
        );

        return array_map(
            static fn(Organization $organization) => $organization->id,
            $organizations
        );
    }

    public function general(): General
    {
        return $this->general ??= new General($this, $this->settings, $this->authentication);
    }

    public function delivery(): Delivery
    {
        return $this->delivery ??= new Delivery($this, $this->settings, $this->authentication);
    }
}