<?php

namespace IikoPhp\SDK\Cloud\Delivery\Restrictions;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class Houses
 * @package IikoPhp\SDK\Cloud\Delivery\Restrictions
 * @property int type Type of house number range.
 * @property int startingNumber Starting house number.
 * @property int maxNumber Maximum house number.
 * @property bool isUnlimitedRange Unlimited range.
 * @property array<string> specificNumbers Specific numbers.
 */
class Houses extends MapperObject
{
}