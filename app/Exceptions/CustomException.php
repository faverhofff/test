<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function __construct($codeError, $messageError)
    {
        parent::__construct($messageError, $codeError, null);
    }
}