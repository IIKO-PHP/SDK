<?php

namespace IikoPhp\SDK\Cloud\Delivery;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;

/**
 * Class Region
 * @package IikoPhp\SDK\Cloud\Delivery
 * @property string id Region ID in RMS.
 * @property string name Name.
 * @property null|int externalRevision External revision.
 * @property bool isDeleted Is-Deleted attribute.
 */
class Region extends MappedObject
{
    protected static function apiMapping($response): array
    {
        $regions = array_merge(...$response['regions']);
        unset($regions['organizationId']);
        return $regions['items'];
    }

    protected static function endpoint(): string
    {
        return '/regions';
    }
}