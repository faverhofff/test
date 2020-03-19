<?php

namespace App\Exceptions;

use Exception;

class NoEnoughProductStockException extends Exception
{
    public function __construct()
    {
        parent::__construct('There are not enough stock of the product.', 404, null);
    }
}
