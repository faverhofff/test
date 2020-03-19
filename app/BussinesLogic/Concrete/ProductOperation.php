<?php

namespace App\BussinesLogic\Concrete;

use Exception;
use App\BussinesLogic\Contract\IProductOperation;

/**
 * Class ProductOperation
 * @package App\BussinesLogic\Concrete
 * @version March 14, 2020, 1:40 am UTC
*/

class ProductOperation {

    /**
     *
     *
     * @param  Collection|Array   $productsPointer
     * @param  IProductOperation  $operation
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public static function do($productsPointer, IProductOperation $operation)
    {
        self::assertCollection($productsPointer);

        return collect($productsPointer)->transform( function($product, $key) use ($operation) {
            $operation->perform($product);
        });
    }

    /**
     * @param $productsPointer
     */
    private static function assertCollection($productsPointer)
    {
        if (empty($productsPointer))
            throw new Exception("Empty list");

        if (!is_array($productsPointer))
            throw new Exception("Invalid list");
    }
}
