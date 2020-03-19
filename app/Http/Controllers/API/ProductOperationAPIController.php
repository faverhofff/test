<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\UpdateProductPriceAPIRequest;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Services\ProductService;
use App\Services\ProductOperationService;
use Illuminate\Support\Arr;
use Response;

/**
 * Class ProductOperationAPIController
 * @package App\Http\Controllers\API
 */

class ProductOperationAPIController extends AppBaseController
{
    /** @var productService */
    private $productService;

    /** @var productOperation */
    private $productOperation;

    public function __construct(
        ProductService $productService,
        ProductOperationService $productOperation
    )
    {
        $this->productService = $productService;
        $this->productOperation = $productOperation;
    }

    /**
     * Update price of the specified product in storage.
     * PUT/PATCH /products/update/price
     *
     * @param UpdateProductPriceAPIRequest $request
     *
     * @return Response
     */
    public function updatePrice(UpdateProductPriceAPIRequest $request)
    {
        $input = $request->all();

        $this->productOperation->setPrice($input['product_id'], $input['price']);

        return $this->sendResponse(true, 'product updated successfully');
    }

    /**
     * Update price according to discount for one or list of products
     * PUT/PATCH /product/discount/price
     *
     * @param int $id
     * @param UpdateProductPriceAPIRequest $request
     *
     * @return Response
     */
    public function discountPrice(UpdateProductPriceAPIRequest $request)
    {
        $input = $request->all();

        $this->productOperation->discountPrice($input['product_id'], $input['price']);

        return $this->sendResponse(true, 'product updated successfully');
    }

    /**
     * Update price according to discount percent for one or list of products
     * PUT/PATCH /product/discount/price/{id}
     *
     * @param int $id
     * @param UpdateProductPriceAPIRequest $request
     *
     * @return Response
     */
    public function discountPricePercent(UpdateProductPriceAPIRequest $request)
    {
        $input = $request->all();

        $this->productOperation->discountPercent($input['product_id'], $input['price']);

        return $this->sendResponse(true, 'product updated successfully');
    }    
}
