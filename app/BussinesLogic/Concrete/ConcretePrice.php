<?php

namespace App\BussinesLogic\Concrete;

use App\Models\Product;
use App\BussinesLogic\Contract\IProductOperation;

/**
 * Class ConcretePrice
 * @package App\BussinesLogic\Concrete
 * @version March 14, 2020, 1:40 am UTC
*/

class ConcretePrice implements IProductOperation {

    /** @var decimal $price */
    private $price;

    /**
     * ConcretePrice constructor. Setup value price to discount
     *
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Perform operation, discount x price price to product.
     *
     * @param  Product  $product
     * @return void
     */
    public function perform(&$product) {
        $product->price = $this->price;
        $product->save();
    }

}
