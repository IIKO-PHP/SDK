<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Product;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class Price
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Product
 * @property double currentPrice Current price.
 * @property bool isIncludedInMenu Is on the menu.
 * @property null|bool nextPrice New price
 * @property bool nextIncludedInMenu Will be on the menu in the future.
 * @property null|string nextDatePrice New price validity start date.
 */
class Price extends MapperObject
{
}