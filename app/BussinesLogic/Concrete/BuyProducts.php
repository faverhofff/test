<?php

namespace App\BussinesLogic\Concrete;

use App\Models\Purchace;
use App\Models\ProductsStock;
use Exception\ProductNotFoundException;
use App\Exceptions\NoEnoughProductStockException;
use App\BussinesLogic\Contract\IProductOperation;

/**
 * Class BuyProducts
 * @package App\BussinesLogic\Concrete
 * @version March 14, 2020, 1:40 am UTC
*/

class BuyProducts implements IProductOperation {

    private $currentIdClient;

    /**
     * BuyProducts constructor.
     * @param $currentIdClient
     */
    public function __construct($currentIdClient)
    {
        $this->currentIdClient = $currentIdClient;
    }

    /**
     * @param $purchaceProduct
     * @throws NoEnoughProductStockException, ProductNotFoundException
     */
    public function perform(&$purchaceProduct)
    {
        $product = ProductsStock::find($purchaceProduct['stock_id']);

        $discount = $product->stock - $purchaceProduct['count'];
        if (floatval($discount) < 0) {
            throw new NoEnoughProductStockException();
        }

        $product->stock -= $purchaceProduct['count'];
        $product->save();

        $this->recordPurchace($this->currentIdClient, $product->id, $purchaceProduct['count']);
    }

    /**
     * @param $clientId
     * @param $productStockID
     * @param $count
     */
    private function recordPurchace($clientId, $productStockID, $count)
    {
        Purchace::insert([
            'client_id' => $clientId,
            'product_stock_id' => $productStockID,
            'count' => $count
        ]);
    }

}
