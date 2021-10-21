<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;

/**
 * Class OrderType
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property string name
 * @property string orderServiceType
 * @property bool isDeleted
 * @property null|int externalRevision
 */
class OrderType extends MappedObject
{
    protected static function endpoint(): string
    {
        return '/order_types';
    }

    protected static function apiMapping($response): array
    {
        $organizations = array_merge(...$response['orderTypes']);
        unset($organizations['organizationId']);
        return $organizations['items'];
    }
}