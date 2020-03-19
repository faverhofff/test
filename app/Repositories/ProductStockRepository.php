<?php

namespace App\Repositories;

use App\Models\ProductsStock;
use App\Traits\RepositoryWhereInTrait;
use Exceptions\ProductNotFoundException;

/**
 * Class ProductStockRepository
 * @package App\Repositories
 * @version March 15, 2020, 1:40 am UTC
*/

class ProductStockRepository extends BaseRepository
{
    use RepositoryWhereInTrait;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'stock'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductsStock::class;
    }

    /**
     * Get product from ID's array
     *
     * @param  string|int  $productId
     * @return Product|null
     */
    public function getProductStocks($productStockId)
    {
        return $this->whereIn('id', $productStockId);
    }

    public function getById($productStockId)
    {
        $productStock = $this->find($productStockId);

        if ($productStock)
            throw new ProductNotFoundException();

        return $productStock;
    }
}
