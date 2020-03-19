<?php

namespace App\Services;

use App\DataTables\ProductsDataTable;
use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\ProductRepository;
use App\Criteria\ProductsWithPriceCriteria;
use App\Exceptions\ProductNotFoundException;
use App\Exceptions\CustomException;

/**
 * Class ProductService
 * @package App\Services
 * @version March 14, 2020, 1:40 am UTC
 */

class ProductService 
{
    /** @var  productRepository */
    private $productRepository;

    /**
     * ProductService constructor.
     * @param ProductRepository $productRepo
     */
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Return all products which has stock
     *
     * @return collection Product
     * @throws \Exception
     */    
    public function getAllProducts()
    {
        return app(ProductsDataTable::class)
            ->json();
    }

    /**
     * Get product from ID
     *
     * @param  string|int  $productId
     * @return Product|null
     */    
    public function getProduct($productId)
    {
         return $this->productRepository->find($productId);
    }

    /**
     * @param $productId
     * @throws ProductNotFoundException
     */
    public function delete($productId)
    {
        /** @var product $product */
        $product = $this->productRepository->find($productId);

        if (empty($product)) {
            throw new ProductNotFoundException();
        }

        $product->delete();
    }

    /**
     * @param $input
     * @return \Illuminate\Database\Eloquent\Model
     * @throws CustomException
     */
    public function create($input)
    {
        try {
            return $this->productRepository->create($input);
        }
        catch(Exception $e) {
            throw new CustomException($e->getCode(), 400);
        }
    }

    /**
     * @param $id
     * @param $input
     * @throws ProductNotFoundException
     */
    public function update($id, $input)
    {
        /** @var product $product */
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            throw new ProductNotFoundException();
        }

        $product = $this->productRepository->update($input, $id);
    }
}
