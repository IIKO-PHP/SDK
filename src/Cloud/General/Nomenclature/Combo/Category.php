<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Combo;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class Category
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Combo
 * @property string id Category id
 * @property string name Category name
 */
class Category extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/combo/get_combos_info';
    }

    protected static function objectSource(): string
    {
        return 'comboCategories';
    }
}