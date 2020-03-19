<?php

namespace App\BussinesLogic\Concrete;

use App\Models\Product;
use App\BussinesLogic\Contract\IProductOperation;

/**
 * Class PriceDiscount
 * @package App\BussinesLogic\Concrete
 * @version March 14, 2020, 1:40 am UTC
*/

class PriceDiscount implements IProductOperation {

    /** @var decimal $price */
    private $price;

    /**
     * PriceDiscount constructor. Setup value price to discount
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Perform operation, discount x price price to product.
     *
     * @param  Product  &product
     * @return void
     */
    public function perform(&$product) {
        if ($product->price - $this->price  < 0) {
            $product->price = 0;
        } else {
            $product->price -= $this->price;
        }

        $product->save();
    }

}
