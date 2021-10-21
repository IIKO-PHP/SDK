<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Product;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class ChildModifier
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Product
 * @property string id ID.
 * @property null|int defaultAmount Default quantity.
 * @property int minAmount Minimum quantity.
 * @property int maxAmount Maximum quantity.
 * @property null|bool required Required availability.
 * @property null|bool hideIfDefaultAmount Hide if default amount applied.
 * @property bool|null splittable Modifier can be splitted.
 * @property null|int freeOfChargeAmount Free of charge amount.
 */
class ChildModifier extends MapperObject
{
}