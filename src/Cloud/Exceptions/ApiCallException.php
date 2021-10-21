<?php

namespace IikoPhp\SDK\Cloud\Exceptions;

use Exception;

class ApiCallException extends Exception
{
    protected $message = 'API endpoint must be specified';
}