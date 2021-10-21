<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Combo;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class Group
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Combo
 * @property string id Id.
 * @property string name Name.
 * @property array<Product> products Products.
 */
class Group extends MapperObject
{
    protected function internalMappings(): array
    {
        return [
            'products' => Product::class,
        ];
    }
}