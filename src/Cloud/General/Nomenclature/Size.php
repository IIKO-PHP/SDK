<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class Size
 * @package IikoPhp\SDK\Cloud\General\Nomenclature
 * @property string id ID.
 * @property string name Name.
 * @property null|int priority Priority (serial number) of the size in the size scale.
 * @property null|bool isDefault Is the default size in the size scale.
 */
class Size extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/nomenclature';
    }

    protected static function listName(): string
    {
        return 'sizes';
    }
}