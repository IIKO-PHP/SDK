<?php

namespace IikoPhp\SDK\Cloud\General\TerminalGroups;

use IikoPhp\SDK\Cloud\Concerns\MappedObject;

/**
 * Class TerminalGroup
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property string organizationId
 * @property string name
 */
class TerminalGroup extends MappedObject
{
    protected static function endpoint(): string
    {
        return '/terminal_groups';
    }

    protected static function apiParams(): array
    {
        return [
            'includeDisabled' => true
        ];
    }

    protected static function apiMapping($response): array
    {
        $organizations = array_merge(...$response['terminalGroups']);
        unset($organizations['organizationId']);
        return $organizations['items'];
    }
}