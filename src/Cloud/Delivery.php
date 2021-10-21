<?php

namespace IikoPhp\SDK\Cloud;

use IikoPhp\SDK\Cloud\Delivery\City;
use IikoPhp\SDK\Cloud\Delivery\MarketingSource;
use IikoPhp\SDK\Cloud\Delivery\Region;
use IikoPhp\SDK\Cloud\Delivery\Restrictions;

/**
 * Class Delivery
 * @package IikoPhp\SDK\Cloud
 * @property array<Restrictions> deliveryRestrictions
 * @property array<Region> regions
 * @property array<City> cities
 * @property array<MarketingSource> marketingSources
 */
class Delivery extends Concerns\CloudSection
{
    protected function listsMap(): array
    {
        return [
            'deliveryRestrictions' => Restrictions::class,
            'regions' => Region::class,
            'cities' => City::class,
            'marketingSources' => MarketingSource::class
        ];
    }

    protected function listsDefaultParams(): array
    {
        return [
            'organizationIds' => $this->cloud->selectOrganizations()
        ];
    }
}