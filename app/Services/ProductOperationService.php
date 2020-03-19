<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Repositories\BaseRepository;
use App\Criteria\ProductsWithPriceCriteria;
use App\Exception\ProductNotFoundException;
use App\BussinesLogic\Concrete\ProductOperation;
use App\BussinesLogic\Concrete\ConcretePrice;
use App\BussinesLogic\Concrete\PercentDiscount;
use App\BussinesLogic\Concrete\PriceDiscount;

/**
 * Class ProductOperationService
 * @package App\Services
 * @version March 14, 2020, 1:40 am UTC
 */

class ProductOperationService 
{
    /** @var  productRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Set price to once product for id
     *
     * @param  array  $productsId
     * @param  decimal  $price
     * @return array<Product>
     * @throws \Exception|ProductNotFoundException
     */    
    public function setPrice($productsId, $price)
    {
        $products = $this->productRepository->getProducts($productsId)->get();

        ProductOperation::do($products, new ConcretePrice($price));

        return $products;
    }    

    /**
     * Discount price to each product for id
     *
     * @param  array  $productsId
     * @param  decimal  $price
     * @return array<Product>
     * @throws \Exception|ProductNotFoundException
     */
    public function discountPrice($productsId, $price)
    {
        $products = $this->productRepository->getProducts($productsId)->get();

        ProductOperation::do($products, new PriceDiscount($price));

        return $products;
    }

    /**
     * Discount price price to each product for id
     *
     * @param  array  $productsId
     * @param  decimal  $price
     * @return array<Product>
     * @throws \Exception|ProductNotFoundException
     */        
    public function discountPercent($productsId, $percent)
    {
        $products = $this->productRepository->getProducts($productsId)->get();

        ProductOperation::do($products, new PercentDiscount($percent));

        return $products;
    }

}
