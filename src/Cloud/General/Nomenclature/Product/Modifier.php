<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Product;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class Modifier
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Product
 * @property string id ID.
 * @property null|int defaultAmount Default quantity.
 * @property int minAmount Minimum quantity.
 * @property int maxAmount Maximum quantity.
 * @property null|bool required Required availability.
 * @property null|bool hideIfDefaultAmount Hide if default amount applied.
 * @property null|bool splittable Modifier can be splitted.
 * @property null|int freeOfChargeAmount Free of charge amount.
 */
class Modifier extends MapperObject
{
}