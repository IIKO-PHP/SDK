<?php

namespace IikoPhp\SDK\Cloud\Exceptions;

use Exception;

class ImmutableException extends Exception
{
    protected $message = 'IIKO objects is immutable';
}