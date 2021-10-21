<?php

namespace IikoPhp\SDK\Cloud\Delivery\Restrictions;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class AddressBinding
 * @package IikoPhp\SDK\Cloud\Delivery\Restrictions
 * @property string streetId ID of the delivery zone's street.
 * @property string postcode Postcode.
 * @property Houses houses Range of house numbers in the delivery zone.
 */
class AddressBinding extends MapperObject
{
    protected function internalMappings(): array
    {
        return [
            'houses' => Houses::class
        ];
    }
}