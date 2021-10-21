<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;

/**
 * Class Discount
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property null|string name
 * @property double percent
 * @property bool isCategorisedDiscount
 * @property null|string comment
 * @property bool canBeAppliedSelectively
 * @property null|double minOrderSum
 * @property string mode
 * @property double sum
 * @property bool canApplyByCardNumber
 * @property bool isManual
 * @property bool isCard
 * @property bool isAutomatic
 * @property bool isDeleted
 */
class Discount extends MappedObject
{
    protected static function endpoint(): string
    {
        return '/discounts';
    }

    protected static function apiMapping($response): array
    {
        $organizations = array_merge(...$response['discounts']);
        unset($organizations['organizationId']);
        return $organizations['items'];
    }
}