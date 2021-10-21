<?php

namespace IikoPhp\SDK\Cloud\Exceptions;

class NotSupportedException extends \Exception
{
    protected $message = 'This feature is not supported by server version for given organization';
}