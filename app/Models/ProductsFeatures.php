<?php

namespace App\Models;

use App\Models\Features;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ProductsFeatures
 * @package App\Models
 * @version March 14, 2020, 4:35 am UTC
 *
 * @property number id
 * @property number product_id
 * @property number feature_id
 */
class ProductsFeatures extends Model
{
    public $table = 'products_features';
    
    public $fillable = [
        'product_id',
        'feature_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'feature_id'  => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required|numeric',
        'feature_id' => 'required|numeric'
    ];


    /**
     * ========================================================================================
     * Relations
     * =====================================================================================
     */

    public function feature()
    {
        return $this->hasOne(Features::class,'id','feature_id');
    }
}
