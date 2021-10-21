<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;
use IikoPhp\SDK\Cloud\General\Nomenclature\StopList\StopItem;

/**
 * Class StopList
 * @package IikoPhp\SDK\Cloud
 * @property string terminalGroupId Terminal ID.
 * @property array<StopItem> items Out-of-stock list.
 */
class StopList extends MappedObject
{
    protected static function endpoint(): string
    {
        return '/stop_lists';
    }

    protected static function apiMapping($response): array
    {
        $organizations = array_merge(...$response['terminalGroupStopLists']);
        unset($organizations['organizationId']);
        return $organizations['items'];
    }

    protected function internalMappings(): array
    {
        return [
            'items' => StopItem::class
        ];
    }
}