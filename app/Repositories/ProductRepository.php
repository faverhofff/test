<?php

namespace App\Repositories;

use App\Models\Product;
use App\Traits\RepositoryWhereInTrait;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version March 14, 2020, 1:40 am UTC
*/

class ProductRepository extends BaseRepository
{
    use RepositoryWhereInTrait;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'description'
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
        return Product::class;
    }

    /**
     * Get product from ID's array
     *
     * @param  string|int  $productId
     * @return Product|null
     */
    public function getProducts($productId)
    {
        return $this->whereIn('id', $productId);
    }

}
