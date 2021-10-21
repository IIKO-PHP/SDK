<?php

namespace IikoPhp\SDK\Cloud\Delivery;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;
use IikoPhp\SDK\Cloud\Delivery\Restrictions\DeliveryRestriction;
use IikoPhp\SDK\Cloud\Delivery\Restrictions\DeliveryZone;

/**
 * Class Restrictions
 * @package IikoPhp\SDK\Cloud\Delivery
 * @property string organizationId Organization ID.
 * @property int deliveryGeocodeServiceType Geocoding service type.
 * @property null|string deliveryRegionsMapUrl Link to the map of delivery service regions.
 * @property int defaultDeliveryDurationInMinutes General standard of delivery time.
 * @property int defaultSelfServiceDurationInMinutes Default pickup time.
 * @property bool useSameDeliveryDuration Indication that all delivery points in all delivery zones use common delivery time limits.
 * @property bool useSameMinSum Indication that all delivery points for all delivery zones use the total minimum order amount.
 * @property null|double defaultMinSum Total minimum order amount.
 * @property bool useSameWorkTimeInterval Indication that all delivery points in all zones use common time limits.
 * @property null|int defaultFrom The beginning of the interval of the total work time for all points and delivery zones, in minutes from the beginning of the day.
 * @property null|int defaultTo End of the total work time interval for all points and delivery zones, in minutes from the beginning of the day.
 * @property bool useSameRestrictionsOnAllWeek Indication that all delivery points in all zones use the same schedule for all days of the week.
 * @property array<DeliveryRestriction> restrictions Restrictions.
 * @property array<DeliveryZone> deliveryZones Delivery zones.
 * @property bool rejectOnGeocodingError Reject delivery if we could not geocode the address.
 * @property bool addDeliveryServiceCost Add shipping cost to order.
 * @property bool useSameDeliveryServiceProduct Indication that the cost is the same for all points of delivery.
 * @property null|string defaultDeliveryServiceProductId Link to "delivery service payment".
 * @property bool useExternalAssignationService Use external delivery distribution service.
 * @property bool frontTrustsCallCenterCheck Indication whether or not to trust on the fronts the call center mapping restrictions from the call center if the composition of the order has not changed since the last check. If true, then trust.
 * @property null|string externalAssignationServiceUrl Address of external delivery distribution service.
 * @property bool requireExactAddressForGeocoding Require an exact geocoding address.
 * @property int zonesMode Delivery restrictions mode.
 * @property bool autoAssignExternalDeliveries Automatically assigned delivery method based on cartography.
 * @property int actionOnValidationRejection Action on problems with auto-assignment.
 */
class Restrictions extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/delivery_restrictions';
    }

    protected static function objectSource(): string
    {
        return 'deliveryRestrictions';
    }

    protected function internalMappings(): array
    {
        return [
            'restrictions' => DeliveryRestriction::class,
            'deliveryZones' => DeliveryZone::class
        ];
    }
}