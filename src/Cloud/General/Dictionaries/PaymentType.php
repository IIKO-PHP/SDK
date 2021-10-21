<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class PaymentType
 * @package IikoPhp\SDK\Cloud
 * @property null|string id
 * @property null|string code
 * @property null|string name
 * @property null|string comment
 * @property bool combinable
 * @property null|int externalRevision
 * @property array<string> applicableMarketingCampaigns
 * @property bool isDeleted
 * @property bool printCheque
 * @property null|string paymentProcessingType
 * @property null|string paymentTypeKind
 */
class PaymentType extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/payment_types';
    }

    protected static function listName(): string
    {
        return 'paymentTypes';
    }
}