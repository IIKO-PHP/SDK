<?php

namespace IikoPhp\SDK\Exceptions;

use Exception;

class ClientCreationException extends Exception
{
    protected $message = 'One of factories has null';
}