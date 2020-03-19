<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Product
 * @package App\Models
 * @version March 14, 2020, 1:40 am UTC
 *
 * @property string name
 * @property number price
 * @property string description
 */
class Product extends Model
{
    public $table = 'products';
    
    public $fillable = [
        'name',
        'price',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:5|max:255',
        'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
    ];
    
    /**
     * ========================================================================================
     * Relations
     * =====================================================================================
     */
    public function stocks()
    {
        return $this->hasMany(ProductsStock::class,'product_id','id');
    }

    public function stockTotal()
    {
        return $this->stocks()->sum('stock');
    }
}
