<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class ProductCategory
 * @package IikoPhp\SDK\Cloud\General\Nomenclature
 * @property string id Product category ID.
 * @property string name Name.
 */
class ProductCategory extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/nomenclature';
    }

    protected static function listName(): string
    {
        return 'productCategories';
    }
}