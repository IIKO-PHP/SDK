<?php

namespace IikoPhp\SDK\Cloud\General\Dictionaries;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * UNTESTED
 * Class CancelClause
 * @package IikoPhp\SDK\Cloud
 * @property string id
 * @property string name
 * @property bool isDeleted
 */
class CancelClause extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/cancel_causes';
    }

    protected static function listName(): string
    {
        return 'cancelClauses';
    }
}