<?php

namespace App\BussinesLogic\Concrete;

use App\Models\Product;
use App\BussinesLogic\Contract\IProductOperation;

/**
 * Class PercentDiscount
 * @package App\BussinesLogic\Concrete
 * @version March 14, 2020, 1:40 am UTC
*/

class PercentDiscount implements IProductOperation {

    /** @var decimal $percent */
    private $percent;

    /**
     * PercentDiscount constructor. Setup value percent to discount
     * @param $percent
     */
    public function __construct($percent)
    {
        $this->percent = $percent;
    }

    /**
     * Perform operation, discount x price price to product.
     *
     * @param  Product  $product
     * @return void
     */
    public function perform(&$product) {
        $percentPrice = $product->price * ( $this->percent / 100 );

        if ($product->price - $percentPrice  < 0) {
            $product->price = 0;
        } else {
            $product->price -= $percentPrice;
        }

        $product->save();
    }

}
