<?php

namespace IikoPhp\SDK\Cloud\Delivery;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class MarketingSource
 * @package IikoPhp\SDK\Cloud\Delivery
 * @property string id Marketing source ID.
 * @property string organizationId Organization ID.
 * @property string name Marketing source name.
 * @property null|int externalRevision External system revision number.
 * @property bool isDeleted IsDeleted attribute of marketing source.
 * @property array<string> attachedSources Attached marketing sources.
 */
class MarketingSource extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/marketing_sources';
    }

    protected static function objectSource(): string
    {
        return 'marketingSources';
    }
}