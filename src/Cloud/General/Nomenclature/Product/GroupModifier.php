<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Product;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class GroupModifier
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Product
 * @property string id ID.
 * @property int minAmount Minimum quantity.
 * @property int maxAmount Maximum quantity.
 * @property null|bool required Required availability.
 * @property null|bool childModifiersHaveMinMaxRestrictions Presence of max/min quantity limitations of child modifiers.
 * @property array<ChildModifier> childModifiers List of child modifiers.
 * @property null|bool hideIfDefaultAmount Hide if default amount applied.
 * @property null|int defaultAmount Default quantity.
 * @property bool|null splittable Modifier can be splitted.
 * @property null|int freeOfChargeAmount Free of charge amount.
 */
class GroupModifier extends MapperObject
{
    protected function internalMappings(): array
    {
        return [
            'childModifiers' => ChildModifier::class
        ];
    }
}