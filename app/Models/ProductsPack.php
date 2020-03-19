<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ProductsPack
 * @package App\Models
 * @version March 14, 2020, 4:16 am UTC
 *
 * @property number id
 * @property number new_product_id
 * @property number product_id
 */
class ProductsPack extends Model
{

    public $table = 'products_packs';
    
    public $fillable = [
        'new_product_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'new_product_id' => 'integer',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'new_product_id' => 'required|numeric',
        'product_id' => 'required|numeric'
    ];

    
}
