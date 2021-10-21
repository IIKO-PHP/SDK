<?php

namespace IikoPhp\SDK\Cloud\Delivery;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;

/**
 * Class City
 * @package IikoPhp\SDK\Cloud\Delivery
 * @property string id City ID in RMS.
 * @property string name Name.
 * @property null|int externalRevision External revision.
 * @property bool isDeleted Is-Deleted attribute
 * @property null|string classifierId ID in classifier, e.g. address database
 * @property null|string additionalInfo City additional information
 */
class City extends MappedObject
{
    protected static function apiMapping($response): array
    {
        $cities = array_merge(...$response['cities']);
        unset($cities['organizationId']);
        return $cities['items'];
    }

    protected static function endpoint(): string
    {
        return '/cities';
    }
}