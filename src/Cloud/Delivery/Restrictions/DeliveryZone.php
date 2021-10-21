<?php

namespace IikoPhp\SDK\Cloud\Delivery\Restrictions;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class DeliveryZone
 * @package IikoPhp\SDK\Cloud\Delivery\Restrictions
 * @property string name Polygon name.
 * @property array<Coordinates> coordinates A set of points describing a polygon.
 * @property array<AddressBinding> addresses A set of addresses describing a polygon.
 */
class DeliveryZone extends MapperObject
{
    protected function internalMappings(): array
    {
        return [
            'coordinates' => Coordinates::class,
            'addresses' => AddressBinding::class,
        ];
    }
}