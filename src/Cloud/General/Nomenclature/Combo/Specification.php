<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Combo;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class Specification
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Combo
 * @property string sourceActionId Id of action that added the combo.
 * @property string categoryId Combo's category id.
 * @property string name Name.
 * @property int priceModificationType
 * @property double priceModification Price Modification.
 * @property array<Group> groups Groups.
 */
class Specification extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/combo/get_combos_info';
    }

    protected static function objectSource(): string
    {
        return 'comboSpecifications';
    }

    protected function internalMappings(): array
    {
        return [
            'groups' => Group::class,
        ];
    }
}