<?php

namespace IikoPhp\SDK\Cloud\Delivery\Restrictions;

use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class DeliveryRestriction
 * @package IikoPhp\SDK\Cloud\Delivery\Restrictions
 * @property null|double minSum The minimum order amount for a given point in a given time interval in this delivery zone.
 * @property null|string terminalGroupId Terminal group ID.
 * @property null|string organizationId Organization ID.
 * @property null|string zone Name of delivery zone from cartography.
 * @property int weekMap Days of the week.
 * @property null|int from The time from which the point can process orders from the selected zone, in minutes from the beginning of the day.
 * @property null|int to The maximum time at which a point can carry an order to a given zone, in minutes from the beginning of the day.
 * @property int priority Priority of point in delivery zone.
 * @property int deliveryDurationInMinutes Delivery duration in delivery zone.
 * @property null|string deliveryServiceProductId Link to "delivery service payment".
 */
class DeliveryRestriction extends MapperObject
{
}