<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductAPIRequest;
use App\Http\Requests\API\UpdateProductAPIRequest;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Services\ProductService;
use Response;

/**
 * Class ProductAdminAPIController
 * @package App\Http\Controllers\API
 */

class ProductAdminAPIController extends AppBaseController
{
    /** @var productService */
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the product.
     * GET|HEAD /products
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->productService->getAllProducts();
    }

    /**
     * Store a newly created product in storage.
     * POST /products
     *
     * @param CreateProductAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAPIRequest $request)
    {
        $input = $request->all();

        $product = $this->productService->create($input);

        return $this->sendResponse($product->toArray(), 'Product saved successfully');
    }

    /**
     * Display the specified product.
     * GET|HEAD /product/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Product $product */
        $product = $this->productService->getProduct($id);

        return $this->sendResponse($product->toArray(), 'Product retrieved successfully');
    }

    /**
     * Update the specified product in storage.
     * PUT/PATCH /product/{id}
     *
     * @param int $id
     * @param UpdateProductAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductAPIRequest $request)
    {
        $input = $request->all();

        /** @var product $product */
        $product = $this->productService->update($id, $input);

        return $this->sendResponse(true, 'product updated successfully');
    }

    /**
     * Remove the specified product from storage.
     * DELETE /products/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var product $product */
        $product = $this->productService->delete($id);

        return $this->sendSuccess('Product deleted successfully');
    }
}
