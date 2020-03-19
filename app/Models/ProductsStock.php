<?php

namespace App\Models;

use App\Models\Features;
use App\Models\Product;
use App\Models\ProductsFeatures;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ProductsStock
 * @package App\Models
 * @version March 14, 2020, 4:33 am UTC
 *
 * @property number id
 * @property number product_id
 * @property number stock
 */
class ProductsStock extends Model
{

    public $table = 'products_stock';
    
    public $fillable = [
        'product_id',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id'  => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required|numeric',
        'stock' => 'required|numeric'
    ];

    /**
     * ========================================================================================
     * Relations
     * =====================================================================================
     */
    public function features()
    {
        return $this->hasMany(ProductsFeatures::class,'product_stock_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
    
}
