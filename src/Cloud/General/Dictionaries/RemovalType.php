<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * UNTESTED
 * Class RemovalType
 * @package IikoPhp\SDK\Cloud
 */
class RemovalType extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/removal_types';
    }

    protected static function listName(): string
    {
        return 'removalTypes';
    }
}