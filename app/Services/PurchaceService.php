<?php

namespace App\Services;

use App\BussinesLogic\Concrete\ProductOperation;
use App\BussinesLogic\Concrete\BuyProducts;
use App\Criteria\ProductsWithPriceCriteria;
use App\Http\Requests\API\PurchaceProductsAPIRequest;
use App\Repositories\ProductStockRepository;

/**
 * Class PurchaceService
 * @package App\Services
 * @version March 14, 2020, 1:40 am UTC
 */

class PurchaceService
{
    /** @var  productStockRepository */
    private $productStockRepository;

    public function __construct(ProductStockRepository $productRepo)
    {
        $this->productStockRepository = $productRepo;
    }


    /**
     * @param $currentIdClient
     * @param PurchaceProductsAPIRequest $arrayProductsRequest
     * @throws \Exception
     */
    public function markAsBuy($currentIdClient, PurchaceProductsAPIRequest $arrayProductsRequest)
    {
        $arrayProductsRequest = $arrayProductsRequest->all();

        \DB::beginTransaction();
        try {
            ProductOperation::do($arrayProductsRequest['products'], new BuyProducts($currentIdClient));

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
        }
    }
}
