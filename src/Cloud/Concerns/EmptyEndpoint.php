<?php

namespace IikoPhp\SDK\Cloud\Concerns;

trait EmptyEndpoint
{
    public static function endpoint(): string
    {
        return '';
    }
}