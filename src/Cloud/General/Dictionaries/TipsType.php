<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * UNTESTED
 * Class TipsType
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property string name
 * @property array<string> organizationIds
 * @property array<string> orderServiceTypes
 * @property array<string> paymentTypesIds
 */
class TipsType extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/tips_types';
    }

    protected static function listName(): string
    {
        return 'tipsTypes';
    }
}