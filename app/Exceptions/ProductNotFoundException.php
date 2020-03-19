<?php

namespace App\Exceptions;

use Exception;

class ProductNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Product ID not found.', 404, null);
    }
}
