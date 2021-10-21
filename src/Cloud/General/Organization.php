<?php

namespace IikoPhp\SDK\Cloud\General;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class Organization
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property null|string name
 * @property null|bool orderItemCommentEnabled
 * @property null|string defaultCallCenterPaymentTypeId
 * @property null|string deliveryServiceType
 * @property null|array<string> deliveryCityIds
 * @property null|string defaultDeliveryCityId
 * @property null|bool marketingSourceRequiredInDelivery
 * @property null|string countryPhoneCode
 * @property null|double currencyMinimumDenomination
 * @property null|string currencyIsoName
 * @property string version
 * @property bool useUaeAddressingSystem
 * @property double longitude
 * @property double latitude
 * @property null|string restaurantAddress
 * @property null|string country
 */
class Organization extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/organizations';
    }

    protected static function objectSource(): string
    {
        return 'organizations';
    }

    protected static function apiParams(): array
    {
        return [
            'returnAdditionalInfo' => true,
            'includeDisabled' => true
        ];
    }
}